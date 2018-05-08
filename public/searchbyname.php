<?php

ob_start();

require_once 'autoload.php';
//include '../../includes/header.php';
//include '../../includes/security.php';

use classes\business\UserManager;
use classes\entity\User;
use classes\util\DBUtil;
use classes\data\UserManagerDB;

$formerror="";
$firstName="";
$lastName="";
$userName="";
$email="";
$password="";
$contactNo="";
$gender="";
$address="";
$city="" ;
$avail ="" ;
$user;

 if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['Submit'])) {  
        $lastName =$_POST["lastName"];
        $firstName =$_POST["firstName"];
        $userName =$_POST["firstName"].$_POST["lastName"];
        $UM=new UserManager();
        $user=$UM->getUserByName($userName);
        $avail="true";
     if (sizeof($user) > 0) {
?>

        echo "<table  id='myTable'  border='1' bgcolor='#e0e0eb'>
        <caption><h1>Users List  by User Name </h1></caption>

       <tr>
           <th>FIRST NAME</th>
           <th>LAST NAME </th>
           <th>GENDER</th>
           <th>EMAIL </th>
           <th>PASSWORD </th> 
           <th>BLOCK USER </th>
           <th>USER TYPE </th>
           <th>COMPANY </th>
           <th>CITY </th>
           <th>COUNTRY </th>
         </tr>
<?php
       
       foreach($user as $row) {   
           
           echo "<tr>";
           echo "<td>" . $row->firstName . "</td>";
           echo "<td>" . $row->lastName . "</td>";
           echo "<td>" . $row->gender. "</td>";
           echo "<td>" . $row->email. "</td>";
           echo "<td>" . $row->password. "</td>";
           echo "<td>" . $row->blockUser. "</td>";
           echo "<td>" . $row->userType. "</td>";
           echo "<td>" . $row->company. "</td>";
           echo "<td>" . $row->city. "</td>";
           echo "<td>" . $row->country. "</td>";
           echo "</tr>";
       }
       echo "</table>";
   } else {
   echo "0 results";
   }
}    
}
?>   

<<html>
<head>
<style>

#form{
    margin: 100;
   font-family:agency FB;
   font-weight:400 ;
    border: 2px dotted red;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 100px;
    padding-bottom: 100px;
    padding-left: 100px;
     }
.text{
       height: 43px;

     }
label {
         font-size :18px ;
         color :  balck;
         font-weight: bold;
     }
     }

h2{
text-align:center;

}

</style>
</head>


<body>

<form method="POST"> 
              
 <h1><centre> Search Page </center></h1>
              

</head>
<body onload='setFocusfirstName();'>
<form method="post"> 
    <table cellspacing="10">
    <tr>
    <td> <input type="text" name="firstName"  id="firstName" value="<?=$firstName?>" placeholder="firstname"></td>
    <td><input type="text" name="lastName" id="lastName"  value="<?=$lastName?>" placeholder="lastname"></td>
       
    <td colspan="2"><input type="Submit" name="Submit" value="Submit"></td>
     </table>
</form>	
</body>
</html> 


