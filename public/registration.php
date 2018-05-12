<?php


require_once 'autoload.php';


$formerror="";




use classes\util\DBUtil;
use classes\business\UserManager;
use classes\entity\User;
 
$formerror="";

$firstName="";
$lastName="";
$email="";
$userName = "";
$password="";
$contactNo = "";
$address  = "" ;
$gender = "" ;
$city ="" ;
$country ="" ;
$status = "" ;
$company = "" ;
$blockUser = "" ;
$userType ="" ;
$updatedBy ="";
$createdBy ="";
$updateOn = "" ;
$createdOn = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(isset($_REQUEST["Submit"])){
   	    $firstName=$_REQUEST["firstname"];
        $lastName=$_REQUEST["lastname"];
        $userName =$_REQUEST["firstname"].$_REQUEST["lastname"];
        $email=$_REQUEST["email"];
        $contactNo =$_REQUEST["contactno"]; 
        $password=$_REQUEST["password"];
	    $gender=$_POST["gender"];
        $address =$_REQUEST["address"] ;
        $city =$_REQUEST["city"] ;
        $country =$_REQUEST["country"] ;
        // $status =$_REQUEST["status" ];
        $company =$_REQUEST["company"] ;
        $blockUser = "No";
        $updatedBy =$userName;
        $createdBy =$userName;
        
    
    if($firstName!='' && $lastName!='' && $email!='' && $password!=''){
        $UM=new UserManager();
        $user=new User();
        $user->firstName=$firstName;
        $user->lastName=$lastName;
        $user->userName=$userName;
        $user->email=$email;
        $user->password=$password;
        $user->contactNo = $contactNo;
        $user->gender = $gender; 
        $user->address = $address;
        $user->city = $city;
        $user->country = $country;
        $user->company =$company ;
        $user->blockUser=$blockUser;
        $user->userType=$userType;
        $user->createdBy=$createdBy;
        $user->createdOn =$createdOn;
        $user->updatedBy=$updatedBy;
        $user->updatedOn =$updateOn ;
        
       
        
        $existuser=$UM->getUserByEmail($email);
    
        if(!isset($existuser)){
            // Save the Data to Database
            
            $UM->saveUser($user);
            header("Location:registrationconfirmation.php");
        }
        else{
            $formerror="User Already Exist";
        }
    }else{
        $formerror="Please fill in the fields";
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

body{
background-image:url("file:///C:/project/m5/m5project/m5.png")
}
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

h3{
font-size :200%;

color:blue;
text-align: center;

}



.radio{
    left padding 40px ;
    text-color: white ;
   left padding 40px ;
   label  color:white;
 
}
h4{
text-align:center;
color:white;
}

</style>
</head>
<body>
   <div class = "container-fluid" style =  "background-image: url("file:///C:/project/m3/Project/images/background.png")" > 
     	           
         <div class = "row" >
	     
 		          <div class="col-sm-3" style="background-color:clear;height:50px">		
		          </div>
		          <div class="col-sm-1" style="background-color clear;height:50px">
		 	           <img src="C:\project\M3 PROJECT\Images\logo.png" class="img-rounded"  width="70px" height="40px" align: left;>
		    
		          </div>
		          <div class="col-sm-4" style="background-color:clear;height:55px">
		                <h3><centre><strong>ABC Jobs Pte Ltd</centre></strong></h3>
 	    		  </div>
	     </div>
         <div class = "row" >
	               <div class = "col-sm-3" >
	               </div>
	               <div class = "col-sm-1" id="form"></div>
                   <div class = "col-sm-4" id= "form">  
                        <h4><centre> Registration Form </center></h4>
                   <form name="registration.php" method="post" >
                        <div class = "form-group" >
                             <label> First Name   </label>
			                 <class="input-group">
			                 <input type "text"  name="firstname"   id="firstname" class ="form-control"
                                    placeholder="e.g. John ">
                        </div>
		                <div class = "form-group" >
                             <label> Last Name   </label>
			                 <class="input-group">
			                 <input type "text"  name="lastname" id ="lastname" class ="form-control"
                                    placeholder="e.g Monis ">
                         </div>
          		        <div class = "form-group" >
                             <label> Email   </label>
			                 <class="input-group">
			                 <input type "email"  name="email" id= "email" class ="form-control"
                                    placeholder="e.g john@gmail.com " id="email">
                        </div>
                        <div class = "form-group">
                             <label>  Password   </label>
			                 <class="input-group">
	        			     <input type="password" class="form-control" placeholder="*******"  style="width:390px; id="password" name="password"> 
                             
                             
                        </div>  

                         <div class = "form-group"  >
                              <label>Gender   </label>
                              <class="input-group">
                              <input type="radio" name="gender" value="male" > Male    
                              <input type="radio" name="gender" value="female">  Female<br>
                 
                         </div>
            
                        
                        <div class = "form-group">
                           <label> Mobile No   </label>
			                <class="input-group">
		                    <input type="text"  name="contactno" id ="contactno" class="form-control"
                             placeholder ="e.g +65 889898 ">
                        </div>


		                 <div class = "form-group" >
                              <label> Company name   </label>
			                  <class="input-group">
			                  <input type "text"  name="company" id ="company" class ="form-control"
                               placeholder="e.g S.M Computers ">
                         </div>
			            <div class = "form-group">
                            <label> City   </label>
			                <class="input-group">
		                    <input type="text"  name="city" id ="city" class="form-control"
                             placeholder ="Singapore">
                        </div>

		                <div class = "form-group" >
                          <label>Country   </label>
                          <class="Input-group">
			              <select input type "text" name="country" id = "country" class ="form-control">
            			         <option value="Singapore ">Singapore</option>
           			             <option value="India ">India</option>
             			         <option value="Malaysia">Malaysia</option>
            			         <option value="Dubhai">Dubhai</option>
            			         <option value="France">France</option>
             			         <option value="US">US</option>
            			         <option value="Philippines">Philippines</option>
           		          </select>
                         </div>

                        <div class = "form-group">
                             <label> Address  </label>
			                 <class="input-group">
		                     <textarea class="form-control" rows="2"
		                     <input type="text"  name="address" id ="address" class="form-control"
                              placeholder ="E.g Park view apartment bolck5 unit 8-2 "></textarea>
                         </div>
                         <div class = "form-group" id="button">
			                <input id="Submit" name="Submit" type="Submit" value="Submit" class="btn btn-primary" style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:green;color:white;font-size: 16px";>
			               <a href="logout.php"  class="btn btn-success" style="border-radius: 0px ; padding: 10 px ;  width:30% ;background-color:grey;color:white;font-size: 16px">Cancel </a>                                         
                 

                    </div>
                  </form>    
                 </div>
	       <div class="col-sm-1" id="form"></div>
         </div>

    </div>

</body>
</html>













           
           
