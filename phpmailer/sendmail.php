<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';

$mail = new PHPMailer(true);
try {

    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'youremail@gmail.com';
    $mail->Password = 'your email pass';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('youremail@gmail.com', 'title');
    $mail->addAddress('yourdestinationemail@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Oe ';
    $mail->Body    = '<b>Email Body</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
?>