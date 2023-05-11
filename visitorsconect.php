<?php
$servername = "localhost";
$username ="root";
$password = "";
$db_name = "security";

$connection=mysqli_connect($servername,$username,$password,$db_name);

if($connection)
{
	echo "Connection successfully";
}
else{

	echo "Connection failed".mysqli_connect_error();

}
?>