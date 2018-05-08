
<?php
use classes\business\UserManager;

require_once 'includes/autoload.php';

$formError="";

$email="";
$password="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  if(isset($_POST['submit'])) {
   
    if(empty($_POST['email'])){
        $valid=false;
        $emailError = "Email missing please register";
        echo $emailError ;
    } else {
           
	    $email=$_REQUEST["email"];
	    $password=$_REQUEST["password"];
        $UM=new UserManager();

        $existuser=$UM->getUserByEmail($email);
     
      $dbpassword =  $existuser->password;
      $check = $UM->verify_password_hash($password, $dbpassword);
     
      if(isset($existuser))  { 
        if($check){
              session_start();
              $_SESSION['email']=$email;
              $_SESSION['password']=$password;
              $userType =$existuser->userType ;
             // var_dump($userType) ;
              if($userType==="A"){
                 header("Location:homepage.php");
                }else{
               header("location:homepage1.php");
              }
            }
         }else{
          $formError="User email not found  to access please register first";
          echo   "<script type='text/javascript'>alert('$formError');</script>";
         }
	   /* if(isset($existuser)){
		     session_start();
		     $_SESSION['email']=$email;
         $_SESSION['password']=$password;
         $userType =$existuser->userType ;
        //var_dump($userType) ;
         if($userType==="A"){
     	     header("Location:homepage.php");
           }else{
          header("location:homepage1.php");
         }
      
         }else{
          $formError="User email not found  to access please register first";
          echo   "<script type='text/javascript'>alert('$formError');</script>";
         }*/ 
        

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

<style>

#form{
  background-color: #006699;  
   
   font-color : white ;
     }
.registration{
           font-size: 55px ;
           font-family:agency FB;
           font-weight:400 ;
           border-bottom-style: ridge;;

     }
.text{
       height: 43px;
     }
label {
         font-size :14px ;
         color : white;
     }

h1{
font-size :200%;

color:white;
text-align: center;

}


h3{
text-align:center;

}

</style>
</head>
<body>


   
	
  <div class = "container-fluid" ) >


           <div class = "row" style="height:50px">
           <nav class="navbar navbar-inverse">
               <ul class="nav navbar-nav navbar-right">
                       <li><a href="forgotconformation.php"><span class="glyphicon glyphicon-log-in"></span> Forgot Password</a></li>
                     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          
               </ul>
              </nav>
            </div>
           <div class = "row" >
		            <div class="col-sm-3" style="height:50px">		
		           </div>
		           <div class="col-sm-1" style="height:50px">
		              	<!-- <img src="C:\project\M3 PROJECT\Images\logo.png" class="img-rounded"  width="70px" height="40px" align: left;> -->
		           </div>
		           <div class="col-sm-4" style= "height:50px">
		               <h3><strong> ABC Jobs Pte Ltd</strong></h3>
               </div> 
                 
	        </div>
          <div class = "row" >
	            <div class = "col-sm-4" ></div>
               <div class = "col-sm-4" id= "form" style="height:300px">  
            	      <h1><centre> Login Form </center></h1>
                  <form method="post"> 
                  	<div class = "form-group" >
                         <label> Email   </label>
			                   <class="input-group">
			                   <input type "email"  name="email" class ="form-control"
                          placeholder="e.g. john@gmail.com " id="email">
                    </div>
                
			              <div class = "form-group">
                         <label for="password"> Password   </label>
 	                       <input type="password" class="form-control" placeholder="********"  style="width:200px"  name="password" >
       			        </div>
             		    <div class = "form-group" id="button">
                         <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary" style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:grey;color:white;font-size: 16px";>
                         <a href="registration.php"  class="btn btn-success" style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:green;color:white;font-size: 16px">Register </a>                                         
                          
	   		            </div> 	
	   	
   		             </form>
          </div>
	
    </div>
    
   		


</body>
</html>













           
           