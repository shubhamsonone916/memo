<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name ='security';

$mysqli = mysqli_connect($hostname,$username,$password,$db_name);
if($mysqli==False){
	echo('Error:can not connect');
	
}

?>  