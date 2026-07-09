<?php
header('Content-Type: application/json; charset=utf-8');

$host   = 'localhost';
$dbname = 'cpkorea';
$user   = 'root';
$pass   = '';

function sanitize($v) { return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8'); }

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

    /* 이메일 발송 (선택) */
    $to      = 'sales@cp-korea.com';
    $subject = "[C&P Korea 문의] {$name} / {$company}";
    $body    = "이름: {$name}\n회사: {$company}\n이메일: {$email}\n전화: {$phone}\n서비스: {$service}\n\n내용:\n{$message}";
    $headers = "From: noreply@cp-korea.com\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";
    @mail($to, $subject, $body, $headers);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    /* DB 연결 실패 시에도 이메일은 발송 시도 */
    $to      = 'sales@cp-korea.com';
    $subject = "[C&P Korea 문의] {$name}";
    $body    = "이름: {$name}\n회사: {$company}\n이메일: {$email}\n전화: {$phone}\n서비스: {$service}\n\n내용:\n{$message}";
    $headers = "From: noreply@cp-korea.com\r\nReply-To: {$email}";
    @mail($to, $subject, $body, $headers);

    echo json_encode(['success' => true]);
}
