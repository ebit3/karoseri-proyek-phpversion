<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $des = htmlspecialchars($_POST['des']);

    // Alamat email yang dituju
    $to = "ebitgunawan2@gmail.com";

    // Subject email
    $subject = "New message from $name";

    // Pesan email
    $message = "Name: $name\nEmail: $email\nDescription: $des";

    $mail = new PHPMailer(true);
    try {
        // Aktifkan debug
        $mail->SMTPDebug = 2; // Aktifkan debug untuk melihat log detail

        // Konfigurasi server SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Host SMTP untuk Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ebitgunawan2@gmail.com'; // Alamat email Anda
        $mail->Password   = 'gzdk qvjz gkgq uklc'; // Gunakan App Password jika menggunakan Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Menggunakan SSL
        $mail->Port       = 465; // Port untuk SSL
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Penerima dan pengaturan email
        $mail->setFrom('ebitgunawan2@gmail.com', 'Your Name');
        $mail->addAddress($to); // Alamat email penerima
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Kirim email
        $mail->send();
        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
    }
}
