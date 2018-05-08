<?php
namespace classes\business;

use classes\entity\User;
use classes\data\UserManagerDB;

class UserManager
{
    public static function getAllUsers(){
        return UserManagerDB::getAllUsers();
    }
    public function getUserByEmailPassword($email,$password){
        return UserManagerDB::getUserByEmailPassword($email,$password);
    }
    public function getUserByEmail($email){
        return UserManagerDB::getUserByEmail($email);
    }
    public function saveUser(User $user){
        UserManagerDB::saveUser($user);
    }
    public function getUserById($userid){
        return UserManagerDB::getUserById($userid);
		
    }
    
    public function getUserBycountry($country){
        return UserManagerDB::getUserBycountry($country);
		
    }
	
	public function getUserBycity($city){
        return UserManagerDB::getUserBycity($city);
		
    }
    public function getUserByName($firstName){
        return UserManagerDB::getUserByName($firstName);
         
    }

    public static function updatePassword($email,$hashed_password){
        return UserManagerDB::updatePassword($email,$hashed_password);
    }

    public function search($firstname, $lastname, $email){
		Return UserManagerDB::search($firstname, $lastname,$email);
	
	}
	public function randomPassword($length,$count, $characters) 
	{
		// $length - the length of the generated password
		// $count - number of passwords to be generated
		// $characters - types of characters to be used in the password
		 
		// define variables used within the function    
		$symbols = array();
		$passwords = array();
		$used_symbols = '';
		$pass = '';
 
		// an array of different character types    
		$symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
		$symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$symbols["numbers"] = '1234567890';
		$symbols["special_symbols"] = '!?~@#-_+<>[]{}';
 
		$characters = explode(",",$characters); // get characters types to be used for the passsword
		foreach ($characters as $key=>$value) {
			$used_symbols .= $symbols[$value]; // build a string with all characters
		}
		$symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
		 
		for ($p = 0; $p < $count; $p++) {
			$pass = '';
			for ($i = 0; $i < $length; $i++) {
				$n = rand(0, $symbols_length); // get a random character from the string with all characters
				$pass .= $used_symbols[$n]; // add the character to the password string
			}
			$passwords[] = $pass;
		}
		return $passwords; // return the generated password
	} //end of generate random password function

     public function searchFunction(array $pair){
        //Prevent nonsensical data in case HTML failed to catch it. Redundant? if regex is set up in HTML tags.	
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data, ENT_COMPAT);
                return $data;
                }
                $condition = array(); 
                //Convert the key-value array to normal array ["keyvalue1", "keyvalue2", "keyvalue3"]
                foreach ($pair as $key => $value){
                    if ($value != ""){
                        //$condition[] = "{$key} LIKE '%{$value}%'"; //Unstripped version
                        $condition[] = $key . " LIKE '%" . test_input($value) . "%'";
                    }           
                } 
                // Separate by ' OR ' delimiter if there are more than 1 pair 
                $condition = join(' OR ', $condition); //OR use implode      
                //print ("CONDITION: " . $condition);
                // Return prepared string:
                return ($condition);            
            }//function create_sql_select END
            

       
     public static function searchUser($condition){
        return UserManagerDB::searchUser($condition);
     } 

// When you need to hash a password, just feed it to the function
// and it will return the hash which you can store in your database. 
// The important thing here is that you don’t have to provide a salt 
// value or a cost parameter. The new API will take care of all of 
// that for you. And the salt is part of the hash, so you don’t 
// have to store it separately.
// 
// Links:
// http://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/
// http://stackoverflow.com/questions/536584/non-random-salt-for-password-hashes/536756#536756
//
// Here is a imlementation for PHP 5.5 and older:
     public static function create_password_hash($strPassword, $numAlgo = 1, $arrOptions = array())
{
    if (function_exists('password_hash')) {
        // php >= 5.5
        $hash = password_hash($strPassword, $numAlgo, $arrOptions);
    } else {
        $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
        $salt = base64_encode($salt);
        $salt = str_replace('+', '.', $salt);
        $hash = crypt($strPassword, '$2y$10$' . $salt . '$');
    }
    return $hash;
}
public static function verify_password_hash($strPassword, $strHash)
{
    if (function_exists('password_verify')) {
        // php >= 5.5
        $boolReturn = password_verify($strPassword, $strHash);
    } else {
        $strHash2 = crypt($strPassword, $strHash);
        $boolReturn = $strHash == $strHash2;
    }
    return $boolReturn;
}
    
}

?>