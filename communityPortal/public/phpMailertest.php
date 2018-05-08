<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/class.phpmailer.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/PHPMailerAutoload.php');


$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
$mail = new PHPMailer;

$mail = new PHPMailer;
//Enable SMTP debugging.
//$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "in-v3.mailjet.com";
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
//$mail->addAddress($existuser->email, $existuser->firstName);
$mail->addAddress('idamonis67@gmail.com');
$mail->isHTML(true);
$mail->Subject = "Forgot Password";
$mail->Body = 'Test Send3';
//$mail->Body = '<p>Dear '.ucwords($existuser->firstName.' '.$existuser->lastName).',<br><p>Your new password is '.$newpassword[0]. '</p><p> Please click <a href="http://localhost/www/public/login.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >here</a> to login with above password.</p>';
//$mail->AltBody = '<p>Your new password is '.$newpassword[0]. '</p><p> Please click <a href="'.$_SERVER['SERVER_NAME'].'/www/public/login.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >here</a> to login with above password.</p>';
$mail->send();

if($mail->send()){
    echo 'Sent';
    // header("location:forgotpassword.php");

}else{
    echo 'Failed';
}

/*
if($mail->send()){
    echo '<br><h4><p>Hi '.ucwords($existuser->firstName.' '.$existuser->lastName).',</p></p>Thank You <br> Your password has been sent to '.$email.'. Please check your mail.</h4></p>';
    // header("location:forgotpassword.php");

}else{
    echo "<br>Error in sending mail: ".$mail->ErrorInfo;
}*/