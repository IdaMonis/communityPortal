
<?php

require_once 'includes/autoload.php';

$formerror="";
use classes\business\UserManager;

$email="";
$opass="";
$npass ="" ;\
$password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //var_dump($_post)    ;  
  if(isset($_POST['Reset'])) {
       ECHO "MJJJ";
       if(empty($_POST['email'])){
          $valid=false;
           $emailError = "PLEASE ENTER EMAIL";
        } 
       //  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        //    $email = $_POST["email"];
         //  }else{
          //  echo "email is not valid";
        //    exit;
         //  }
          
        $email = $_POST["email"];
	    $opass = $_POST["opass"];
        $npass = $_POST["npass"];
        $password = $_POST["npass"] ;
	    $UM=new UserManager();
        $existuser=$UM->getUserByEmailPassword($email,$opass);
     
        if(isset($existuser)){
		    session_start();
		    $_SESSION['email']=$email;
		    $_SESSION['id']=$existuser->id;
            $UM->saveUser($user);
                header("Location:changepassmsg.php");
         }
        else{
            $formerror="User Not Exist";
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
 
<style>
body{
background-image:url("file:///C:/Users/Ida%20Monis/Pictures/projectbackground.png")
}
#form{
         background-color: #006699;  
         min-height: 450px ;
         font-color : white ;
     }
.registration{
           font-size: 55px ;
           font-family:agency FB;
           font-weight: 700 ;
           border-bottom-style: ridge;;

     }
.text{
       height: 43px;
     }
label {
         font-size :14px ;
         color : white;
     }
.btn-primary{
          border-radius; 0px ; padding: 10px;
          width: 47%
}

.btn-danger{
        border-radius: 0px ;
        padding: 10 px ;
        width:47% ;
    }
h1{
font-size :150%;

color:black;
text-align: center;

}

#username{
width:100px
}
#pwd{
width:100px
}
h4{
text-align:center;
color :white ;


}
#formlabel label {
  text-align:right;
display:block;
}
</style>
</head>
<body>
<form>
    <div class = "container-fluid"  >
        <div class = "row" >
       	    <div class="col-sm-3" style="background-color:clear;height:50px">		
		    </div>
		    <div class="col-sm-1" style="background-color:white;height:50px">
		 	       <img src="C:\project\M3 PROJECT\Images\logo.png" class="img-rounded"  width="70px" height="40px" align: left;>
		    </div>
		    <div class="col-sm-5" style="background-color:white;height:50px">
		          <h1><strong> ABC Jobs Pte Ltd</strong></h1>
            </div> 
        </div>
        <div class = "row" >
	         <div class = "col-sm-3" >
	         </div>
	         <div class = "col-sm-1" id="form"></div>
            
	         <div class = "col-sm-5" id= "form">  
            	    <h4><centre> Forgot Password Form </center></h4>
                 	<div class = "form-group" >
                         <label>Forgot your Password? </label>
                        <div id = "formlabel">
          	                  <label >     Let us help you  </label>
		                </div>
 			        </div>
                    <div class = "form-group" >
                         <label> Email   </label>
			                   <class="input-group">
			                   <input type "email"  name="email" class ="form-control"
                               placeholder="e.g. john@gmail.com " id="email"
                               style="width:390px">
                    </div>
                
    		        <div class = "form-group">
                      <label for="opass"> Password   </label>
		              <class="input-group">
	  	              <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        class="form-control" placeholder="Password" 
                        style="width:390px; id='opass' name="opass"> 
                    </div>
                         
                    <div class = "form-group">
           	          <label for="npass">Confirm Password</label>
    			      <class="input-group">	
			          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                       class="form-control" placeholder="Password" 
                       style="width:390px; id='npass' name="npass"> 
                    </div>
            
                    <div class = "form-group" id="button">
			                <input id="Reset" name="Reset" type="Reset" value="Reset" class="btn btn-primary"
                                 style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:green;color:white;font-size: 16px";>
			               <a href="homepage.php"  class="btn btn-success" 
                           style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:grey;color:white;font-size: 16px">Cancel </a>                                         
                                       
			        
			         </div>	  
             </div>
        </div>  
          
        
    </div>

 </form>
</body>
</html>













           
           