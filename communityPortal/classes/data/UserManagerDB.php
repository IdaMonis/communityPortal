<?php
namespace classes\data;

use classes\entity\User;
use classes\util\DBUtil;

class UserManagerDB
  {
    
    public static function fillUser($row)
    {
        $user = new User();
        $user->userId = $row["USER_ID"];
        $user->firstName = $row["FIRST_NAME"];
        $user->lastName = $row["LAST_NAME"];
        $user->userName = $row["USER_NAME"];
        $user->contactNo = $row["CONTACT_NO"];
        $user->email = $row["EMAIL"];
        $user->password = $row["PASSWORD"];
        $user->gender =$row["GENDER"];
        $user->address = $row["ADDRESS"];
        $user->city = $row["CITY"];
        $user->country = $row["COUNTRY"];
        $user->company =$row["COMPANY"] ;
        $user->status = $row["STATUS"];
        $user->blockUser=$row["BLOCK_USER"];
        $user->userType=$row["USER_TYPE"];
        $user->createdBy=$row ["CREATED_BY"];
        $user->createdOn =$row["CREATED_ON"];
        $user->updatedBy=$row["UPDATED_BY"];
        $user->updatedOn =$row["UPDATED_ON"];
       
        return $user;
    }
    
    public static function getUserByEmailPassword($email, $password)
    {
        $user = NULL;
        $conn = DBUtil::getConnection();
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $sql = "select * from cp_tb_user where EMAIL='$email' and PASSWORD='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $user = self::fillUser($row);
            }
        }
        $conn->close();
        return $user;
    }
    
    public static function getUserByEmail($email)
    {
        $user = NULL;
        $conn = DBUtil::getConnection();
        $email = mysqli_real_escape_string($conn, $email);
        $sql = "select * from cp_tb_user where EMAIL='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $user = self::fillUser($row);
                
            }
        }
        $conn->close();
        return $user;
    }
    
    public static function saveUser(User $user)
    {
        $conn = DBUtil::getConnection();
        $sql = "call USERUPDATE(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssssssssssssss", $user->userId, $user->firstName, $user->lastName, $user->userName,$user->contactNo,
            $user->email, $user->password,$user->gender,$user->address, $user->city,$user->country ,$user->company,
            $user->status,$user->blockUser,$user->userType, $user->createdBy, 
            $user->updatedBy);
       $stmt->execute();
        if ($stmt->errno != 0) {
            printf("Error: %s.\n", $stmt->error);
        }
        $stmt->close();
        $conn->close();
    }
    
    public static function getAllUsers()
    {
        $users[]=array();
        $conn=DBUtil::getConnection();
        $sql="select * from cp_tb_user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = self::fillUser($row);
                $users[] = $user;
            }
        }
        $conn->close();
        return $user;
    }

    public static function getUserById($userid)
     {
		
        $user=NULL;
        $conn=DBUtil::getConnection();
        $id=mysqli_real_escape_string($conn,$userid);
        $sql="select * from cp_tb_user where USER_ID=$userid";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
				
            }
        }
        $conn->close();
        return $user;
     }

   public static function getUserByName($userName){
          $users = array();
          $result = array();
          $conn=DBUtil::getConnection();
          $sql="select * from cp_tb_user where FIRST_NAME like '%$userName%'" ;
     
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  $user = self::fillUser($row);
                  array_push($users, $user);
              } 
           }
           $conn->close();
          return $users;
     } 

    public static function getUserByCity($city){
           $users = array();
           $result = array();
           $conn=DBUtil::getConnection();
           $sql="select * from cp_tb_user where CITY like'%$city%'";
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                 $user = self::fillUser($row);
                array_push($users, $user);
            
              } 
         }
         $conn->close();
         return $users;
    }
    public static function getUserByCountry($country){
        $users = array();
        $result = array();
        $conn=DBUtil::getConnection();
        $sql="select * from cp_tb_user where COUNTRY like'%$country%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
                $user = self::fillUser($row);
                array_push($users, $user);
            
         } 
        }
         $conn->close();
         return $users;
    }

    
     
    public static function searchUser($condition){
                   $conn = mysqli_connect("localhost","root","monis","m4schema");
                   $sql="SELECT * FROM cp_tb_user WHERE $condition;";
                   $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                                              
                          echo "<table  id='myTable'  border='1' bgcolor='#e0e0eb' width='800' >
                         <thead>
                            <th><b>First Name</b></th>
                            <th><b>Last Name</b></th>
                            <th><b>Email</b></th>
                        </thead>";
                     while($row = $result->fetch_assoc()) {
                          echo "<tr><td>{$row['FIRST_NAME']}</td>
                                    <td>{$row['LAST_NAME']}             </td>
                                    <td>{$row['EMAIL']}</td>
                                </tr>";
                       }    echo "</table>";
                    } else {
                    echo "Sorry, 0 result found. " . $conn->error;
                   }
        
                $conn->close();
   
     }

     public static function updatePassword($email,$hashed_password){
        $conn = mysqli_connect("localhost","root","monis","m4schema");   
        $sql="UPDATE cp_tb_user SET password = '$hashed_password' WHERE email='$email'";
        $result = $conn->query($sql);
    }

 }
   



?>