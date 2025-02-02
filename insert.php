<?php
include'dbconn.php';


if(isset($_POST['add_user'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    if($name == "" || empty($name)){
        header('location:index.php?message=You need to fill in the name!');
    }
    else{
        $row = "insert into users (id, name, address, contact) value ('$id', '$name', '$address', '$contact')";
        $result=$conn->query($row);
        if(!$result){
            die("Failed".mysqli_error($conn));
        }
        else{
            header('location:index.php?insert_msg=New user has been added!');
        }
    }  
}


?>