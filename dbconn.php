<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_users";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
    die("No connection".$conn->connect_error);
}

?>