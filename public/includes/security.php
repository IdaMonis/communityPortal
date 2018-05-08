<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:/communityportal/public/loginpage.php");
}
?>