<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $phone = htmlentities($_POST['phone']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    // $mail->Host = 'smtp.mailtrap.com';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cakahal@gmail.com';
    $mail->Password = 'asiuzjljffntrzlg';
    $mail->Port = 465;
    // $mail->Port = 995;
    $mail->SMTPSecure = 'ssl';
    // $mail->SMTPSecure = 'tsl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('cakahal@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./anywhere.php");




}

 

?>