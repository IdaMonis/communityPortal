<?php
require_once '../../includes/autoload.php';

use classes\util\DBUtil;
use classes\business\UserManager;
use classes\entity\User;

$formerror="";

$firstName="";
$lastName="";
$email="";
$password="";
$newpassword ="" ;
$hashed_password ="" ;
if(isset($_REQUEST["submitted"])){
    $firstName=$_REQUEST["firstName"];
    $lastName=$_REQUEST["lastName"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    
    if($firstName!='' && $lastName!='' && $email!='' && $password!=''){
        $UM=new UserManager();
        $user=new User();
        $user->firstName=$firstName;
        $user->lastName=$lastName;
        $user->email=$email;
        $user->password=$password;
        $newpassword =$password;
        $hashed_password=$UM->create_password_hash($newpassword[0],$numAlgo = 1, $arrOptions = array());
        $user->password=$hashed_password;
      
        $existuser=$UM->getUserByEmail($email);
            
         
        if(!isset($existuser)){
            // Save the Data to Database
            $UM->saveUser($user);
            header("Location:registerthankyou.php");
        }
        else{
            $formerror="User Already Exist";
        }
    }else{
        $formerror="Please fill in the fields";
    }
}





?>
<form name="myForm" method="post">
<h1>Registration Form</h1>
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
