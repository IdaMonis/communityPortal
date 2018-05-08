<?php
$servername = "localhost";
$username = "root";
$password = "monis";
$dbname = "m4schema";
$email ="" ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(isset($_POST['submit'])) {
          $email=$_POST["email"];
           $sql = "UPDATE cp_tb_user SET BLOCK_USER='YES' WHERE EMAIL ='$email' ";

          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully"; 
              return ;
          } else {
              echo "Error updating record: " . $conn->error; 
              return ;
          }
          
          $conn->close();


        

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
               <div class="col-8"  id= "form" style= "margin-top: 150px;top padding: 30px; width:500px; height:100px" >
                  <form method="post"> 
                  <centre> <h2>         Block User By Email    </center></h2>
                  
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