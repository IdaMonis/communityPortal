<?php
use classes\business\UserManager;

require_once 'includes/autoload.php';

$formerror="";

$email="";
$password="";
if(isset($_REQUEST["submitted"])){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];

    $UM=new UserManager();

    $existuser=$UM->getUserByEmailPassword($email,$password);
    if(isset($existuser)){
        session_start();
        $_SESSION['email']=$email;
		$_SESSION['id']=$existuser->id;
        header("Location:home.php");
    }else{
        $formerror="Invalid User Name or Password";
    }
}

?>
<h1>Login</h1>
<div><?=$formerror?></div>
<form name="myForm" method="post">
<table border='1' width="800">
  <tr>    
    <td>Email</td>
    <td><input type="text" name="email" value="<?=$email?>" size="50"></td>
  </tr>
  <tr>    
    <td>Password</td>
    <td><input type="password" name="password" value="<?=$password?>" size="20"></td>
  </tr>  
  <tr>
    <td colspan="2" align="right">
       <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
       <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">
    </td>
  </tr>
  <tr>
    <td colspan="2">
       <a href="modules/user/register.php">Register Now</a>
    </td>
  </tr>  
  
</table>
</form>