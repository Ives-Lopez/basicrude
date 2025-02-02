<?php

if(isset($_POST['add_user'])){


    $UserID = $_POST['User_number'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];

    if($Name == "" || empty($Name)){
        header('location:index.php?message=You need to fill in the first name');
    }
    
}


?>