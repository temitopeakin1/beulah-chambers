<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPException;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

if(isset($_POST['send'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $msg = htmlentities($_POST['msg']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.beulahchambers.org';
    $mail-> SMTPAuth = true;
    $mail-> Username= 'info@beulahchambers.org';
    $mail-> Password = '';
    $mail-> port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isPHP(true);
    $mail->setFrom($name, $email, $phone, $msg);
    $mail->addAddress('info@beulahchambers.org');
    $mail->Subject =("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./response.php");
}

?>