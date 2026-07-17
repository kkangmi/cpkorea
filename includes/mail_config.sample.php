<?php
/**
 * 이 파일을 mail_config.php로 복사한 뒤 아래 값을 실제 SMTP 정보로 채워주세요.
 * mail_config.php는 .gitignore에 등록되어 있어 깃에 올라가지 않습니다.
 *
 * 가비아 호스팅 이메일 계정을 쓰는 경우 보통:
 *   SMTP_HOST = smtp.gabiamail.com (또는 가비아에서 안내하는 호스트)
 *   SMTP_PORT = 465 (SSL) 또는 587 (TLS)
 *   SMTP_USER = sales@cp-korea.com (실제 발송 계정 전체 주소)
 *   SMTP_PASS = 해당 계정 비밀번호
 * 정확한 값은 가비아 관리자 페이지 > 이메일 설정에서 확인하세요.
 */

return [
    'host'       => 'smtp.example.com',
    'port'       => 465,
    'encryption' => 'ssl',        // 'ssl' (포트 465) 또는 'tls' (포트 587)
    'username'   => 'sales@cp-korea.com',
    'password'   => 'CHANGE_ME',
    'from_email' => 'sales@cp-korea.com',
    'from_name'  => 'C&P Korea Website',
    'to_email'   => 'sales@cp-korea.com',
];
