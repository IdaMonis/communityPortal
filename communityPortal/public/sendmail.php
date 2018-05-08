<?php
//require_once "phpmailer/PHPMailerAutoload.php";
//require '/phpmailer/vendor/Autoload.php';
require 'vendor/Autoload.php';
require 'vendor/phpmailer/phpmailer/class.phpmailer.php';
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
//use 'phpmailer\vendor\composer\ClassLoader.php';
$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = " in-v3.mailjet.com";
//Set this to true if SMTP host requires authentication
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "95813c3a5c3b7c7a69ba572f2f2a1529";
$mail->Password = "af83b676020f8d1853c903cc6aa61934";

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
//$mail->Port = 587;
$mail->Port = 25;
$mail->From = "idacapstone25@gmail.com";

$mail->FromName = "Ida Monis";
$mail->addAddress("idamonis67@gmail.com", "Ida ");

$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}
?>
