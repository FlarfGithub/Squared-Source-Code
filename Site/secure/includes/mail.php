<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class mail
{
    function sendmail($key,$email)
    {
        require 'vendor/autoload.php';
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "in-v3.mailjet.com";
        $mail->Username = "dddf6a9db549df5817eaa60085040082";
        $mail->Password = "ce79c4f4000a9aa5f354ff7107838ffa";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->setFrom('no-reply@calvyy.xyz', 'Calvy bot');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Calvy verification';
        $mail->Body = '<h2 style="text-align: center;">Thank you for registering in Calvy! Your verification code is '.$key.'</h2>';
        $mail->send();
    }
}

?>