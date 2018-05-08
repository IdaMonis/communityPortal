<?php

ob_start();
require_once 'includes/autoload.php';
//include 'includes/header.php';
//include 'includes/security.php';

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

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
   if(isset($_POST['submit'])) {
         $email=$_POST["email"];
      

        if($email!='')
         {
       
             $UM=new UserManager();
             $user=$UM->getUserByEmail($email);
             $avail="true";
         
        }
	 
     }
  
     if($avail !=''){
        ?>
        <br/><br/>Below is the list of Developers registered in community portal <br/><br/>
       <table width="400" border="1">
            <tr>
               <td><b> User Id</b></td>
               <td><b>First Name</b></td>
               <td><b>Last Name</b></td>
               <td><b>Email</b></td>
               <td><b>Password</b></td>
               <td><b>City</b></td>
               <td><b>Gender</b></td>
            </tr>    
    <?php 
        if (isset($user))
        {
            if($user!=null){
            ?>
            <tr>
                <td><?=$user->userId?></td>
                <td><?=$user->firstName?></td>
                <td><?=$user->lastName?></td>
                <td><?=$user->email?></td>
                <td><?=$user->password?></td>
                <td><?=$user->city?></td>
                <td><?=$user->gender?></td>
                
                </tr>
                <?php 
            }
        }
    ?>
    </table><br/><br/>
    <?php 
  }
}
?>
<!Doctype HTML>
<html>
<head>
<style>

#form{
   margin: 200;
   font-family:agency FB;
   font-weight:400 ;
    border: 2px dotted red;
    background-color: grey;
    padding-top: 50px;
    padding-right: 300px;
    padding-bottom: 100px;
    padding-left: 300px;

} 

.text{
       height: 50px;
     }
label {
         font-size :18px ;
         color :  balck;
         font-weight: bold;
     }

h2{
text-align:left; 
color :black ;
}



</style>
</head>


<body>


<div class = "container-fluid" >

    <div class = "row" >
            <div class="col-4"></div>
               <div class="col-8"  id= "form" >
                  <form method="post"> 
                        <h2><centre>             Search By Email  </center></h2>
                        <br>
                    	<div class = "form-group" >
                                <label> Email   </label>
			                   <class="input-group">
			                   <input type "email"  name="email" class ="form-control"
                                placeholder="e.g. john@gmail.com " id="email">
                         </div> 
                         <br>   <br>
                               <div class = "form-group" id="button">
                                      <input id="submit" name="submit" type="submit" 
                                      value="Submit" class="btn btn-primary" 
                                      style="border-radius: 0px; padding-left:10px ;  width:30% ;background-color:grey;color:white;font-size: 16px";>
                               </div>
                      
	   	     
   		            </form>
                </div>
	
    </div>
    
</div>

</body>
</html>
<?php

include 'includes/footer.php';
?>