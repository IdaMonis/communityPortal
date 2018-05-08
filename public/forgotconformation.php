<?php
use classes\business\UserManager;
require_once 'includes/autoload.php';
$formError="";

require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/class.phpmailer.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
$mail = new PHPMailer;
$formerror="";

$email="";
$password="";
$error_auth="";
$error_name="";
$error_passwd="";
$error_email="";
$newpassword ="" ;
$hashed_password ="" ;
//$validate=new Validation();
$headers ="ghj";
if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_POST['submit'])) {
        // var_dump($email) ;
         $email=$_POST["email"];
	     $UM=new UserManager();
	     $existuser=$UM->getUserByEmail($email);
	     if(!$existuser){
	     	echo 'No user found';
	     }else if(isset($existuser)){
			//generate new password
			$newpassword=$UM->randomPassword(6,1,"lower_case,upper_case,numbers");
         
            //var_dump($newpassword[0]);
         
            $hashed_password=$UM->create_password_hash($newpassword[0],$numAlgo = 1, $arrOptions = array());
             
           // var_dump($hashed_password);
         
			//update database with new password
            $UM->updatePassword($email,$hashed_password);
            //$UM->saveUser($user);
              //-----------------------------------------------
			$mail = new PHPMailer;
			//Enable SMTP debugging.
			//$mail->SMTPDebug = 3;
			//Set PHPMailer to use SMTP.
			$mail->isSMTP();
			//Set SMTP host name
			$mail->Host = "in-v3.mailjet.com";
			//Set this to true if SMTP host requires authentication
			$mail->SMTPAuth = true;
			//Provide username and password
			$mail->Username = "95813c3a5c3b7c7a69ba572f2f2a1529";
			$mail->Password = "af83b676020f8d1853c903cc6aa61934";
			//If SMTP requires TLS encryption then set it
			$mail->SMTPSecure = "tls";
			//Set TCP port to connect to
			//$mail->Port = 587;
			$mail->Port = 25;
			$mail->From = "idacapstone25@gmail.com";
			$mail->FromName = "Ida Monis";
            $mail->addAddress($email,$existuser->firstName);
			$mail->isHTML(true);
			$mail->Subject = "Forgot Password";
			$mail->Body = '<p>Dear '.ucwords($existuser->firstName.' '.$existuser->lastName).',
						  <br><p>Your new password is '.$newpassword[0]. '</p>
						  <p> Please click <a href="http://localhost/communityportal/public/loginpage.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >
						   here</a> to login with above password.</p>
						   <p> Please click <a href="http://localhost/communityportal/public/unsubscribe.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >
						   unsubscribe</a> to email receiving from this address.</p>' ;

	 	     //  $mail->AltBody = '<p>UNSUBSCRIBE <a href="http://localhost/CommunityPortal/public/UNSUBSCRIBE.PHP> UNSUBSCRIBE</a> </P>" ;
		
			if($mail->send()){
                //echo "INSIDE SEND";
                echo '<br><h4><p style="color:blue">Hi '.ucwords($existuser->firstName.' '.$existuser->lastName).',</p><p style="color:blue">Thank You <br> Your password has been sent to '.$email.'. Please check your mail.</h4></p>';
               // header("location:forgotpassword.php");
        
			}else{
				echo "<br>Error in sending mail: ".$mail->ErrorInfo;
			}
		
			//mail($email,"password","ksgh",$headers);			
			//$formerror="Valid email user. password: ".$newpassword[0];
			//coding for sending email
			// do work here
			//$formerror='<p>Your new password is '.$newpassword[0]. '</p><p> Please click <a href="http://localhost/www/public/login.php" >here</a> to login with above password.</p>';
			
			//$formerror="New password have been sent to ".$email;
			//$formerror="New password have been sent to ".$email;
			//header("Location:home.php");
	    }else{
			$formerror="Invalid email user";
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
h5{
text-align:center;
color :white ;
}
h4{
text-align:center;
color :white ;
}
h3{
text-align:center;
color :white ;
}
</style>
</head>
<body>
<form method = "POST"> 

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
	         <div class = "col-sm-3" >   </div>
	         <div class = "col-sm-1" id="form"></div>
             <div class = "col-sm-4" id= "form">  
            	<br>
            
            
                  
		        <div class = "form-group" >
                    <label><h3>Forgot your Password?  </h3>   </label> 
                    <label><h3>Let us help you <h3> </label> 
                    <label><h5>Enter Login ID  to receive your validaton code by email <h5></label>
		        </div>
		         
    	        <div class = "form-group" >
                     <label> Login Email </label>
		             <class="input-group">
		             <input type "text"  name="email" class ="form-control"
                           placeholder="Enter Email  Address"  id="email">
                </div>
                <br>
                
                <div class = "form-group" id="button">
                         <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary" style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:grey;color:white;font-size: 16px";>
                </div> 	
	   	
             </div>
	            <div class="col-sm-1" id="form"></div>
        </div>

    </div>


    
    </form>  


</body>
</html>













           
           