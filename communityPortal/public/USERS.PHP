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


echo "<table border='1'  bgcolor='#e0e0eb'>
<caption><h1>Users List </h1></caption>
<tr>
<th>FIRST NAME</th>
<th>LAST NAME </th>
<th>GENDER</th>
<th>EMAIL </th>
<th>PASSWORD </th>
<th>BLOCK USER </th>
<th>USER TYPE </th>
<th>COMPANY </th>
<th>CITY </th>
<th>COUNTRY </th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FIRST_NAME'] . "</td>";
echo "<td>" . $row['LAST_NAME'] . "</td>";
echo "<td>" . $row['GENDER'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";
echo "<td>" . $row['PASSWORD'] . "</td>";
echo "<td>" . $row['BLOCK_USER'] . "</td>";
echo "<td>" . $row['USER_TYPE'] . "</td>";
echo "<td>" . $row['COMPANY'] . "</td>";
echo "<td>" . $row['CITY'] . "</td>";
echo "<td>" . $row['COUNTRY'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>