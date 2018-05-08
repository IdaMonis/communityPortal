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
           $sql = "UPDATE cp_tb_user SET et SUBSCRIBE='NO' WHERE EMAIL ='$email' ";

          if ($conn->query($sql) === TRUE) {
              echo "Unscribed  successfully"; 
              return ;
          } else {
              echo "Error updating record: " . $conn->error; 
              return ;
          }
          
          $conn->close();

    }
}      
?>