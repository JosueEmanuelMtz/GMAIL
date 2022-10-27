<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
 
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'josue.emanuelmtz@gmail.com';
    $mail->Password = 'vzrougvjujhmohjg';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('josue.emanuelmtz@gmail.com', 'Emanuel Martinez');
    $mail->addAddress('josue.emanuelmtz@gmail.com', 'Josue Aburto');
    // $mail->addCC('concopia@gmail.com');

    $mail->addAttachment('docs/dashboard.png', 'Dashboard.png');

    $mail->isHTML(true);
    $mail->Subject = 'Prueba desde GMAIL';
    $mail->Body = 'Hola, <br/>Esta es una prueba desde <b>Gmail</b>.';
    $mail->send();

    echo 'Correo enviado';
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
