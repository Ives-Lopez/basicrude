<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="db_users";

//connection
$conn=new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection error: ".$conn->connect_error);
	
}else{
	// echo"connection okay";
}
?>
<!--connection for database-->
