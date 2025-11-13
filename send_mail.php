<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

header('Content-Type: application/json');

function clean_input($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = str_replace(["\r", "\n"], '', $data); // Prevent header injection
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = clean_input($_POST['name'] ?? '');
    $reason  = clean_input($_POST['reason'] ?? '');
    $email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = clean_input($_POST['message'] ?? '');

    if (!$name || !$reason || !$email || !$message) {
        echo json_encode(['success' => false, 'message' => 'All fields are required and must be valid.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.jemsamediatech.africa';
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('SMTP_USER');
        $mail->Password   = getenv('SMTP_PASS');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('info@jemsamediatech.africa', 'Jemsa Media Website');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('info@jemsamediatech.africa');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $reason;
        $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Your message has been sent!']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
}
