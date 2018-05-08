<?php


require_once 'autoload.php';

use classes\util\DBUtil;
use classes\business\UserManager;
use classes\entity\User;
session_start();
//include 'security.php';
//include 'includes/header.php';



$formerror="";
$userId = 0 ;
$firstName="";
$lastName="";

$userName = "";
$password="";
$contactNo = "";
$address  = "" ;
$gender = "" ;
$city ="" ;
$country ="" ;
$status = "" ;
$company ="" ;
$blockUser = "" ;
$userType ="" ;
$updatedBy ="";
$createdBy ="";
$updateOn = "" ;
$createdOn = "";
$avail = '' ;
$update =''; 
$user;
$email = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($__REQUEST['Submit'])) {
            $UM=new UserManager();
            $existuser=$UM->getUserByEmail($_SESSION["email"]);
            
            $userId=$existuser->userId ;
            $firstName=$existuser->firstName;
            $lastName=$existuser->lastName;
            $email=$existuser->email;
            $password=$existuser->password ;
            $userName=$existuser->userName;
            $contactNo=$existuser->contactNo;
            $address=$existuser->address ;
            $gender=$existuser->gender ;
            $city=$existuser->city ;
            $country=$existuser->country ;
            $status=$existuser->status ;
            $company=$existuser->company ;
            $blockUser=$existuser->blockUser ;
            $userType=$existuser->userType ;
            $updatedBy=$existuser->updatedBy;
            $createdBy=$existuser->createdBy;
                   
            $avail="true";
        }else {
            $firstName=$_REQUEST["firstName"];
            $lastName=$_REQUEST["lastName"];
            $email=$_POST["email"];
            $password=$_REQUEST["password"];
            $userName=$_REQUEST["userName"];
            $contactNo=$_REQUEST["contactNo"];
            $address=$_REQUEST["address"];
            $gender=$_REQUEST["gender"];
            $city=$_REQUEST["city"];
            $country=$_REQUEST["country"];
            $status=$_REQUEST["status"];
            $company=$_REQUEST["company"];
            $blockUser=$_REQUEST["blockUser"];
            $userType=$_REQUEST["userType"];
            $updatedBy =$_REQUEST["updatedBy"];
            $createdBy =$_REQUEST["createdBy"];
      
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
           $existuser->userName=$userName;
           $existuser->contacNo=$contactNo;
           $existuser->address=$address;
           $existuser->gender=$gender  ;
           $existuser->city=$city ;
           $existuser->country =$country ;
           $existuser->status=$status ;
           $existuser->company=$company  ;
           $existuser->blockUser=$blockUser  ;
           $existuser->userType =$userType;
           $existuser->updatedBy=$updatedBy ;
           $existuser->creadtedBy=$createdBy ;
  
           $UM->saveUser($existuser);
           $_SESSION["email"]=$email;
           header("Location:updatesucces.php");
       
        }
       }else{
        $formerror="Please provide required values";
    }
 }
}
?>

 <!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style >
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

caption {
  font-weight: bold;
  font-color : black;
}
  
#form{
  background-color:  blue;  
   
   font-color : black;
      }

div {
    margin-left: 100px;
    border: 1px solid #4CAF50;
   
    box-sizing: border-box;
    width: 50%;
    border: 5px solid grey;
    float: left;
    background-color: #9999ff;
}
h3{
  padding-left :100px;
    
}



</style>
</head>
<body>  
 
<form method="POST"  >
<h3>  User Updation Page  </h3>
 <div><?=$formerror?></div>
 <div>
<table border='1' width="500"  >
 
<tr>
  <td> </td>
  </tr>
  <tr>
  <td> </td>
  </tr>


  <tr>
    <td>First Name</td>
    <td><input type="text" name="firstName" value="<?=$firstName?>" size="50"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lastName" value="<?=$lastName?>" size="50"></td>
  </tr>
     <tr>
    <td>User Name</td>
    <td><input type="text" name="userName" value="<?=$userName?>" size="50"></td>
  </tr>
   
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?=$email?>" size="50"></td>
    
  </tr>
  
  <tr>
    <td>User Password </td>
    <td><input type="text" name="password" value="<?=$password?>" size="50"></td>
  </tr>
  
  <tr>
    <td>Contact No </td>
    <td><input type="text" name="contactNo" value="<?=$contactNo?>"  size="50"></td>
  </tr>
  
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" value="<?=$address?>" size="50"></td>
  </tr>

 <tr>
    <td>City</td>
    <td><input type="text" name="city" value="<?=$city?>" size="50"></td>
  </tr>

 <tr>
    <td>Country</td>
    <td><input type="text" name="country" value="<?=$country?>" size="50"></td>
  </tr>
  <tr>
    <td>Company</td>
    <td><input type="text" name="company" value="<?=$company?>" size="50"></td>
  </tr>
  
 <tr>
    <td>Gender </td>
    <td><input type="text" name="gender" value="<?=$gender?>" size="50"></td>
  </tr>
  <tr>
    <td>Block user</td>
    <td><input type="text" name="blockUser" value="<?=$blockUser?>" size="50"></td>
  </tr>
  <tr>
    <td>User Type</td>
    <td><input type="text" name="userType" value="<?=$userType?>" size="50"></td>
  </tr>
  <tr>
    <td>User Status</td>
    <td><input type="text" name="status" value="<?=$status?>" size="50"></td>
  </tr>
  <tr>
    <td>Created By</td>
    <td><input type="text" name="createdBy" value="<?=$createdBy?>" size="50"></td>
  </tr>
  <tr>
    <td>Updated By</td>
    <td><input type="text" name="updatedBy" value="<?=$updatedBy?>" size="50"></td>
  </tr>

            
  <tr>
    <td colspan="2" align="right">
       <input type="hidden" name="Submit" value="1"><input type="Submit" name="Submit" value="Submit">
       <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">
    </td>
  </tr>

</table>
</div>

</form>
</body>
</html>


