<?php
require_once '../../includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;

ob_start();
include '../../includes/security.php';
include '../../includes/header.php';
?>

<?php

$formerror="";
$firstName="";
$lastName="";
$email="";
$password="";


if(!isset($_REQUEST["submitted"])){
  $UM=new UserManager();
  $existuser=$UM->getUserByEmail($_SESSION["email"]);
  $firstName=$existuser->firstName;
  $lastName=$existuser->lastName;
  $email=$existuser->email;
  $password=$existuser->password;
}else{
  $firstName=$_REQUEST["firstName"];
  $lastName=$_REQUEST["lastName"];
  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];

  if($firstName!='' && $lastName!='' && $email!='' && $password!=''){
       $update=true;
       $UM=new UserManager();
       if($email!=$_SESSION["email"]){
           $existuser=$UM->getUserByEmail($email);
           if(is_null($existuser)==false){
               $formerror="User Email already in use, unable to update email";
               $update=false;
           }
       }
       if($update){
           $existuser=$UM->getUserByEmail($_SESSION["email"]);
           $existuser->firstName=$firstName;
           $existuser->lastName=$lastName;
           $existuser->email=$email;
           $existuser->password=$password;
           $UM->saveUser($existuser);
           $_SESSION["email"]=$email;
           header("Location:../../home.php");
       }
  }else{
      $formerror="Please provide required values";
  }
}
?>

<form name="myForm" method="post">
<h1>Update Profile</h1>
<div><?=$formerror?></div>
<table border='1' width="800">
  <tr>
    <td>First Name</td>
    <td><input type="text" name="firstName" value="<?=$firstName?>" size="50"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lastName" value="<?=$lastName?>" size="50"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?=$email?>" size="50"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" value="<?=$password?>" size="20"></td>
  </tr>
  <tr>
    <td>Confirm Password</td>
    <td><input type="password" name="cpassword" value="<?=$password?>" size="20"></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
       <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
       <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">
    </td>
  </tr>
</table>
</form>


<?php
include '../../includes/footer.php';
?>