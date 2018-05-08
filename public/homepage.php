
<?php
use classes\business\UserManager;
$formerror="";

$email="";
$password="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pwd"];

    $UM=new UserManager();

    $existuser=$UM->getUserByEmailPassword($email,$password);
    if(isset($existuser)){
        session_start();
        $_SESSION['email']=$email;
		$_SESSION['id']=$existuser->id;
        header("Location:homepage.php");
    }else{
        $formerror="Invalid User Name or Password";
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


body{
background-image:url("file:///C:/project/m5/m5project/background.png")
}


h3 {
color:white;
}
#username{
width:180px
}
#pwd{
width:180px
}

li a{
color:	#1497b8;
font-size:16px;
width:160px;
}

.navbar navbar-inverse {
    background-color: GREY;
    border-color: #E7E7E7;
}

.navbar-default {
 
 background-color: RED;

 border-color: #425766;

}

.navbar-form {
    border-color: GREEN; }
</style>
</head>
<form>
<body>

 <nav class="navbar navbar-inverse">
 <div class="container-fluid">
      <ul class="nav navbar-nav"> 
      <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Admin pages  </a>
         <ul class="dropdown-menu">
      
            <li class="active"><a href="Updateprofile.php"> Update Profile </a></li>
               <li><a href="deleteuser.php">delete User</a></li>
                <li><a href="blockuser.php">Block User</a></li>
                <li><a href="Usertype.php">Change user type into admin or other </a></li>
                
        </ul>
        </li>
            <li><a href="Loginpage.php">SIGN IN </a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span>Search pages  </a>
        <ul class="dropdown-menu">
          <li><a href="usersview.php">User List</a></li>
          <li><a href="searchuser.php">User List</a></li>
          <li><a href="searchbyname.php">Search By Name</a></li>
          <li><a href="searchbyemail.php">Search By Email</a></li>
          <li><a href="searchbycity.php">Search By City</a></li>
          <li><a href="searchbycountry.php"> </span> Search By Country</a></li>
        </ul>
       </li>
       </ul>
     <ul class="nav navbar-nav navbar-right">
          <li><a href="Changepassword.php"><span class="glyphicon glyphicon-user"></span> Change Password</a></li>
         <li><a href="forgotconformation.php"><span class="glyphicon glyphicon-log-in"></span> Forgot Password</a></li>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          
      </ul>
     </ul> 
   </div> 
</nav>

   




	


</form>
</body>
</html>














           
           