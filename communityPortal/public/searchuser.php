<doctype.html>
<head>
<style>

#form{
  
    border: 2px dotted red;
    background-color: grey;
    padding-top: 50px;
    padding-right: 100px;
    padding-bottom: 100px;
    padding-left:100px;

} 	
</style>
</head>


<body>
echo "<table  id='myTable'  border='1' bgcolor='#e0e0eb' width='800'>
<caption><h1> SEARCH USER </h1></caption>

        <form action="" method="post">    
        <tr>
			<thead>
               <th><b>First Name </b></th><th><input type="text" name="qSearch[FIRST_NAME]" /></th>
               <th><b>Last Name</b></th><th><input type="text" name="qSearch[LAST_NAME]" /></th>
               <th><b>Email</b></th><th><input type="text" name="qSearch[EMAIL]" /></th>           
			   </thead>
		</tr>
		<tr><td> 
				<input type="submit" name ="search"  value="Search" />  
			</td>
		</tr>	
    </form>  

<?php

use classes\business\UserManager;

require_once 'includes/autoload.php';

$formError="";

$email="";
$password="";
if(!empty($_REQUEST['search'])){    
    if (!empty($_POST['qSearch'])){    
        $qSearch = $_POST['qSearch'];       
		$UM = new UserManager();
		//Output of NULL if the input is absent. Returns the condtion e.g. firstName LIKE %% OR lastName like %%
		$stmt = $UM->searchFunction($qSearch); 
	//	print("Conditon: {$stmt}"); //Output for condition
		if ($stmt){
			$UM=new UserManager();
			$b=$UM->searchUser($stmt);
      
    } else {
        echo "<p style='color:red'>Please enter some search input.</p>";
    }
        }// END -- if (!empty($_POST['qSearch']))
}
?>	



