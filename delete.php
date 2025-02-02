<?php
include'dbconn.php';
?>


<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];


   $row = "delete from users where id = $id ";

   $result = mysqli_query($conn, $row);

   if(!$result){
    die("Query Failed".mysqli_error($conn));
   }
   else{
    header('location:index.php?delete_msg= You have deleted the record');
   }

}
?>


