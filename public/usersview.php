<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABC</title>
<style type="text/css">
    .tablewrap {  
        margin: 20px; 
        padding: 20px;
        width:60%;
        border: solid 5px;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
    }
    input[type=text] {
        width:60%;
        padding: 12px 20px;
        margin:  10px 0 ;
    }
    label {
        font-size :14px ;
        color : solid black;
        text-align: right;
        width: 140px;
        
    }
    
    </style>
</head>
<?php
use classes\business\UserManager;
require_once 'includes/autoload.php';
require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/class.phpmailer.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/CommunityPortal/classes/phpmailer/vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
$formerror="";
$recipient;
$subject ;
$message ;
$email=array();
$selectAllArray=array();
$UM=new UserManager();
?>

<body>

<div style="margin-right: 50px; margin-left: 50px; border: solid 5px; background: grey;">
<?php
$servername = "localhost";
$username = "root";
$password = "monis";
$dbname = "m4schema";
$email ="" ;
// Create connection

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM CP_TB_USER");
?>

<form method='POST' name='userList'>
    <table  id='myTable'   align='center'  border='1' bgcolor='#e0e0eb'  td.my-cell { padding:100px; }   >
        <caption><h3>Users List </h3></caption>
        <tr> 
            <th>FIRST NAME</th>
            <th>LAST NAME </th>
            <th>USER NAME </th>
            <th>EMAIL </th>
            <th>DELETE </th>
            <th>SEND EMAIL</th>
        </tr>
<?php
    //Looping and printing out entries in database
    while($row = mysqli_fetch_array($result))
        {
?>     
<tr>
    <td><?=$row['FIRST_NAME']?></td>
    <td><?=$row['LAST_NAME']?></td>
    <td><?=$row['USER_NAME']?></td>
    <td><?=$row['EMAIL']?></td>
    <td><button onclick="deleteRow(this)">DEL</button></td>
    <td><button onclick="checkall(this)"
    style="text-align: center; vertical-align: middle;"  >
    <input type="checkbox" name="email[]" value='<?=$row['EMAIL']?>'  style="width:20px;height:20px;padding:0px"/>&nbsp;</td>
</tr>
<?php 
    array_push($selectAllArray, $row['EMAIL']);
    }
?>
    <td>               
        <button type='submit' name='selectAll' style="width:150px;font-size:13pt; border:3px solid blue ;float: right">select all email</button>
    </td>
    <td>
        <button type='submit' name='userList1' style="width:150px;font-size:13pt; border:3px solid blue ;float: right">Select Checked</button>
    </td>
    </table>
</form>

<?php
//To receive data from userList
if(isset($_POST['userList1'])){
    $selectAllArray = $_POST['email'];
    //Assigning $recipient to the checked checkbox
    $recipient = (implode(", ", $selectAllArray));
} else if (isset($_POST['selectAll'])){
    $recipient = (implode(", ", $selectAllArray));
}
?> 

</div>   

<form method="post" name="mailbulk">
    <div style="margin-right: 50px; margin-left: 50px;border: solid 5px;background: grey;">
        <label for="recipient"> To :</label> 
        <input id="recipient" name="recipients" type="text" value='<?php if(isset($recipient)){echo $recipient;}?>' readonly/>
        <br>
        <label>Subject: </label>
        <input name="subject" type="text"/>
        <br>
        <label>Message:</label>
        <input name="message" type="textarea"rows="5" cols="80" >
        <input id="submit" name="mailbulk" type="submit" value="Submit"  style="border-radius: 3px ; padding: 10 px ;  width:150px ;background-color:green;color:white;font-size: 20px ;float: right"";>        
    </div> 
</form>

<?php
//PHPMailer
if(isset($_POST["mailbulk"])){
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $recipients = explode(', ', $_POST['recipients']);
    //Proceed when $recipients is not empty
    if($recipients) {
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
          foreach($recipients as $emailRecipient){
              $mail->addAddress($emailRecipient,$UM->getUserByEmail($emailRecipient)->firstName);
          }
          $mail->isHTML(true);
          $mail->Subject = $subject ;
          $mail->Body = $message ;
                      // '<p>Dear '.ucwords($existuser->firstName.' '.$existuser->lastName).',
                      //  <br><p>Your new password is '.$newpassword[0]. '</p>
                       //	  <p> Please click <a href="http://localhost/communityportal/public/loginpage.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >
                       //	   here</a> to login with above password.</p>
                       //		   <p> Please click <a href="http://localhost/communityportal/public/unsubscribe.php?pwd='.$newpassword[0].'&email='.trim($existuser->email).'" >
                       //		   unsubscribe</a> to email receiving from this address.</p>' ;

                     //  $mail->AltBody = '<p>UNSUBSCRIBE <a href="http://localhost/CommunityPortal/public/UNSUBSCRIBE.PHP> UNSUBSCRIBE</a> </P>" ;
      
          if($mail->send()){
              //echo "INSIDE SEND";
              //echo '<br><h4><p style="color:blue">Hi '.ucwords($existuser->firstName.' '.$existuser->lastName).',</p><p style="color:blue">Thank You <br> Your password has been sent to '.$email.'. Please check your mail.</h4></p>';
            echo 'OK';
          }else{
              echo "<br>Error in sending mail: ".$mail->ErrorInfo;
          }
      }else{
        echo 'No Email in recipients';
      }


}//End of $_POST["mailbulk"]
    

?>


</body>

<script>
function deleteRow(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

   
</script>


<?php
mysqli_close($con);
?>
 </html>           
   