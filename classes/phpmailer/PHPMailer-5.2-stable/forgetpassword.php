<?php
require_once 'includes/autoload.php';
use classes\business\UserManager;
use classes\business\Validation;



require_once('class.phpmailer.php');
require_once "class.smtp.php";
$formerror="";

$email="";
$password="";
$error_auth="";
$error_name="";
$error_passwd="";
$error_email="";
$validate=new Validation();

if(isset($_POST["submitted"])){
    $email=$_POST["email"];

	$UM=new UserManager();
	$existuser=$UM->getUserByEmail($email);
	if(isset($existuser)){
			//generate new password
			$newpassword=$UM->randomPassword(8,1,"lower_case,upper_case,numbers");
			//update database with new password
			$UM->updatePassword($email,$newpassword[0]);
			//$formerror="Valid email user. password: ".$newpassword[0];
			//coding for sending email
			// do work here

			//error_reporting(E_ALL);
			//error_reporting(E_STRICT);
			date_default_timezone_set('Singapore');
			$mail             = new PHPMailer();
			$mail->IsSMTP(); // telling the class to use SMTP
			//$mail->Host       = "mail.yourdomain.com"; // SMTP server
			//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->IsHTML(true);
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server smtp.gmail.com
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "abcportal12345@gmail.com";   // GMAIL username
			$mail->Password   = "abcportal";            // GMAIL password

			$mail->SetFrom('abcportal12345@gmail.com', 'ABC Jobs Pte Ltd');

			//$mail->AddReplyTo("name@yourdomain.com","First Last");

			$mail->Subject    = "Reset Password";

			//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			//$mail->MsgHTML($body);

			$mail->Body = "Your Temporary Password is ".$newpassword[0];

			$address = "tohkt4128@gmail.com";
			$mail->AddAddress($address, "Alex");

			//$mail->AddAttachment("images/phpmailer.gif");      // attachment
			//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

			if(!$mail->Send()) {
			  echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			  $formerror="New password have been sent to ".$email;
			}

			//$formerror="New password have been sent to ".$email;
			//header("Location:home.php");
	}else{
			$formerror="Invalid email user";
	}
}

?>
<html>
<link rel="stylesheet" href=".\css\pure-release-1.0.0\pure-min.css">
<style>
.error{color:red;}
</style>
<body>

<h1 style="margin-top: 60px; text-align:center;">Forget Password</h1>
<form name="myForm" method="post" class="pure-form pure-form-stacked" style="margin-left: 40%;>
<table border='0' width="100%">
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="<?=$email?>" pattern=".{1,}"   required title="Cannot be empty field" size="30">
	<span class="error"><?php echo $error_email?></span></td>
	<td>
  </tr>
  <tr>
    <td></td>
    <td><br><input type="submit" name="submitted" value="Submit" class="pure-button pure-button-primary">
    </td>
  </tr>
  <tr><span class="error"><?php echo $formerror?></span></tr>
</table>
</form>
<?php
include 'includes/footer.php';
?>
