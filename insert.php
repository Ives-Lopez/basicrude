<?php
include'dbconn.php';


if(isset($_POST['add_user'])){
    $User_number = $_POST['User_number'];
    $Name = $_POST['Name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    if($Name == "" || empty($Name)){
        header('location:index.php?message=You need to fill in the name!');
    }
    else{
        $sqlListofUsers = "insert into users (User_number, Name, address, contact) value ('$User_number', '$Name', '$address', '$contact')";
        $result=$conn->query($sqlListofUsers);
        if(!$result){
            die("Failed".mysqli_error($conn));
        }
        else{
            header('location:index.php?insert_msg=New user has been added!');
        }
    }  
}


?>