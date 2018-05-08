
<?php 
   if(isset($_SESSION["email"])){
       ?>
       <a href="/communityportal/public/homepage.php">Home</a> &nbsp;
       <a href="/communityportal/public/module/user/updateprofile.php">Update Profile</a> &nbsp;
       <a href="/communityportal/public/modules/user/userlist.php">View Users</a> &nbsp; 
       <a href="/communityportal/public/logout.php">Logout</a> &nbsp; 
       <?php 
   }
?>