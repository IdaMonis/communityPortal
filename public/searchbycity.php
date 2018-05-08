<?php
ob_start();
require_once 'includes/autoload.php';

use classes\util\DBUtil;
use classes\business\UserManager;
use classes\business\UserManagerDB;
use classes\entity\User;
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
$user;

$avail ="" ;

$email ="" ;
//$result = [];
   

if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(isset($_POST['submit'])) {  
          
           $UM=new UserManager();
           $city = $_REQUEST['city'];

           $user=$UM->getUserByCity($city);   

           $avail="true";
             
          if (sizeof($user) > 0) {
?>

             echo "<table  id='myTable'  border='1' bgcolor='#e0e0eb'>
             <caption><h1>Users List  by City </h1></caption>
   
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
     

<html>
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
                   <div class = "form-group" >
                         <label>City </label>
			                   <class="input-group">
			                   <input type "text"  name="city" class ="form-control"
                          placeholder="city" id="city">
                    </div>
                                        
                    <br>
                <div class = "form-group" id="button">
                                      <input id="submit" name="submit" type="submit" 
                                      value="submit" class="btn btn-primary" 
                                      style="border-radius: 0px; padding-left:10px ;  width:20% ;background-color:grey;color:white;font-size: 16px";>
                 </div>
                      
                 
</form>
  
</body>
</html>