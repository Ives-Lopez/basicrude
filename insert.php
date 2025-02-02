<?php

if(isset($_POST['add_user'])){


    $UserID = $_POST['User_number'];
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];

    if($Name == "" || empty($Name)){
        header('location:index.php?message=You need to fill in the name');
    }
    else{
        $query = "insert into 'users' ('User_number', 'Name', 'address', 'contact')  values ('$UserID', '$Name', '$Address', '$Contact')";
        
        $result = mysqli_query($query)

        if(!$result){
            die("Query Failed".mysqli_error());
        }
        else{
            header('location:index.php?insert_msg=Your data has been added succesfully');
        }
    }
    
}


?>