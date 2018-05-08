<?php
require_once '../../includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;

ob_start();
include '../../includes/security.php';
include '../../includes/header.php';
?>

<?php 
$UM=new UserManager();
$users=$UM->getAllUsers();

if(isset($users)){
    ?>
    <br/><br/>Below is the list of Developers registered in community portal <br/><br/>
    <table width="800" border="1">
            <tr>
               <td><b>Id</b></td>
               <td><b>First Name</b></td>
               <td><b>Last Name</b></td>
               <td><b>Email</b></td>
            </tr>    
    <?php 
    foreach ($users as $user) {
        if($user!=null){
            ?>
            <tr>
               <td><?=$user->id?></td>
               <td><?=$user->firstName?></td>
               <td><?=$user->lastName?></td>
               <td><?=$user->email?></td>
            </tr>
            <?php 
        }
    }
    ?>
    </table><br/><br/>
    <?php 
}
?>



<?php
include '../../includes/footer.php';
?>