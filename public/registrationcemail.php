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
background-image:url("file:///C:/Users/Ida%20Monis/Pictures/projectbackground.png")
}
#form{
         background-color: #006699;  
         min-height: 450px ;
         font-color : white ;
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
font-size :200%;

color:white;
text-align: center;

}

#username{
width:100px
}
#pwd{
width:100px
}
h3{
text-align:center;
color:white;

}

</style>
</head>
<body>
  <div class = "container-fluid"  >
       
  	   <div class = "row" style="background-color:white">
		 
   		             <div class="col-sm-2  " style="background-color:white;height:50px">
			  	  <form class="form-inline">
				     <img src="C:\project\M3 PROJECT\Images\logo.png" class="img-rounded"  width="50px" height="50px" align: left;>
                                   </form>
                             </div>
 			     <div class="col-sm-3 ">  
                                    <form class="form-inline">
				
      					  <label style ="color:black"> Email   </label>
			  		  <class="input-group">
			      		  <input type "email"  name="email" class ="form-control"
                           		  placeholder=" e.g john@gmail.com " id="email1">
                                    </form>
                              </div>
				
					
                                  
                                <div class="col-sm-3 ">  
      			     	      <form class="form-inline">
		       		        	<div class="form-group" >
		 				    <label style ="color:black" for="pwd" >Password: </label>
		 				    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Password" id='pwd' name="pwd"> 
                 				</div>
                                      </form>
                                 </div>
                               		

                             <div class="col-sm-2 ">  
      			     	  <form class="form-inline">
		       		       <a href="loginpage.html"  class="btn btn-success" style="width:160px;border-radius:7px ">Login </a>
                                  </form>
                            </div>
		          <div class="col-sm-2 " style="background-color:white;height:50px">
   	  	        	  <a href="forgotpassword.html"  class="btn btn-link" style="width:160px;border-radius:7px">Forgot Password ?</a>
		 	  </div>

 	  </div>
</div>
 
   <div class = "container-fluid"  >
      
      <div class = "row" style="background-color:clear;height:20px"> </div>
    	           
         <div class = "row" >
	     
 		<div class="col-sm-3" style="background-color:clear;height:50px">		
		 </div>
		 <div class="col-sm-1" style="background-color:white;height:50px">
		 	<img src="C:\project\M3 PROJECT\Images\logo.png" class="img-rounded"  width="70px" height="40px" align: left;>
		   </div>
		  <div class="col-sm-5" style="background-color:white;height:50px">
		        <h3><strong> ABC Jobs Pte Ltd</strong></h3>
 
                    </div> 
                
	    </div>
         <div class = "row" >
	    <div class = "col-sm-3" >
	       </div>
	      <div class = "col-sm-1" id="form"></div>
            
	     <div class = "col-sm-4" id= "form">  
            	 <h3><centre> Email Form </center></h3>
                 
	
                <form> 
                  
			<div class = "form-group" >
                      		<label>Account Setup  </label>
		    
          	            <a href="loginpage.html" class="btn btn-link pull-right btn-sm" style="width:100px;border-radius:7px; text-align = right; color:white; ">Already member <br>please login </a>
		
 			</div>

    			<div class = "form-group" >
                           <label> Email   </label>
			    <class="input-group">
			       <input type "email"  name="email" class ="form-control"
                            placeholder="Enter User Email Address " id="email">
                        </div>
                
			<div class = "form-group">
                               
   			       <label for="pwd1"> Password   </label>
			       <class="input-group">
	
			      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Password"  style="width:390px; id='pwd' name="pwd"> 
                         </div>
                         
                         <div class = "form-group">
           		   <label for="cpsw">confirm Password</label>
    			    <class="input-group">	
			    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="Password"  style="width:390px; id='pwd' name="cpwd"> 
                          </div>
             
                          <div class="checkbox">
 				 <label><input type="checkbox" value=" ">I agree to the terms and condition</label>
		           </div>
 			    <div class = "form-group" id="button">                            
			        <a href="homepage.html"  class="btn btn-success" style="width:200px;border-radius:7px">Create Account </a>
			    </div>
			   
                  </form>    
                 </div>
	       <div class="col-sm-1" id="form"></div>
         </div>

    </div>
<div class = "container-fluid"  >
   <div class = "row" style="background-color:clear;height:40px"> </div>       
  	   <div class = "row" style="background-color:white">
   		<div class="col-sm-2  " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">About Us</a>
	        </div>
               <div class="col-sm-2  " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">Copy right policy</a>
	        </div>
              <div class="col-sm-2 " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">User agreement</a>
	        </div>
              <div class="col-sm-2  " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">Companies</a>
	        </div>
              <div class="col-sm-2  " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">Universities</a>
	        </div>
              <div class="col-sm-2  " style="background-color:white;height:50px">
                     <a href=""  class="btn btn-link" style="width:160px;border-radius:7px">Jobs</a>
	        </div>
             
          </div>
</div>
</body>
</html>













           
           