<?php
header('Content-Type: application/json; charset=utf-8');

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

$host   = 'localhost';
$dbname = 'cpkorea';
$user   = 'root';
$pass   = '';

function sanitize($v) { return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8'); }
/* json_encode() silently returns false (empty response) if a string contains invalid
   UTF-8 — e.g. OS-locale error text from a failed SMTP connection. Strip it so the
   response is always valid JSON, even on PHP < 7.2 where JSON_INVALID_UTF8_SUBSTITUTE
   doesn't exist. */
function safe_utf8($v) { return @iconv('UTF-8', 'UTF-8//IGNORE', (string) $v); }

$name    = sanitize($_POST['name']    ?? '');
$company = sanitize($_POST['company'] ?? '');
$email   = sanitize($_POST['email']   ?? '');
$phone   = sanitize($_POST['phone']   ?? '');
$service = sanitize($_POST['service'] ?? '');
$message = sanitize($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Required fields missing.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

/* DB 저장 (선택 — 실패해도 이메일 발송은 계속 진행) */
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS inquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        company VARCHAR(150),
        email VARCHAR(150),
        phone VARCHAR(50),
        service VARCHAR(100),
        message TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $stmt = $pdo->prepare(
        "INSERT INTO inquiries (name, company, email, phone, service, message)
         VALUES (:name, :company, :email, :phone, :service, :message)"
    );
    $stmt->execute([
        ':name'    => $name,
        ':company' => $company,
        ':email'   => $email,
        ':phone'   => $phone,
        ':service' => $service,
        ':message' => $message,
    ]);
} catch (PDOException $e) {
    /* DB 연결/저장 실패는 무시하고 이메일 발송으로 계속 진행 */
}

/* 이메일 발송 (SMTP, PHPMailer) */
$configPath = __DIR__ . '/mail_config.php';
if (!file_exists($configPath)) {
    echo json_encode([
        'success' => false,
        'message' => 'Mail is not configured yet. Copy includes/mail_config.sample.php to includes/mail_config.php and fill in your SMTP details.',
    ]);
    exit;
}
$config = require $configPath;

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $config['host'];
    $mail->Port       = $config['port'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['username'];
    $mail->Password   = $config['password'];
    $mail->SMTPSecure = $config['encryption'];
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email']);
    $mail->addReplyTo($email, $name);

    $mail->Subject = "[C&P Korea 문의] {$name} / {$company}";
    $mail->Body    = "이름: {$name}\n회사: {$company}\n이메일: {$email}\n전화: {$phone}\n서비스: {$service}\n\n내용:\n{$message}";

    $mail->send();
    echo json_encode(['success' => true]);
} catch (PHPMailerException $e) {
    echo json_encode(['success' => false, 'message' => 'Email send failed: ' . safe_utf8($mail->ErrorInfo)]);
}
