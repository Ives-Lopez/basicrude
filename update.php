<?php
include'dbconn.php';
include'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>  
<h1 id="main">Crud User List</h1>







    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $row = "select * from users where 'id' = $id";
        $result=$conn->query($row);
        if(!$result){
            die("Failed".mysqli_error($conn));
        }
        else{
           $userList = mysqli_fetch_assoc($result);
        }   
    }
    ?>
<?php
if (isset($_POST['update_user'])) {
   
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $id = $_POST['id']; 

    
    $name = mysqli_real_escape_string($conn, $name);
    $address = mysqli_real_escape_string($conn, $address);
    $contact = mysqli_real_escape_string($conn, $contact);
    $id = intval($id); 

    
    $query = "UPDATE users SET name = '$name', address = '$address', contact = '$contact' WHERE id = $id";
    $result = $conn->query($query);

    if (!$result) {
        die("Failed: " . mysqli_error($conn));
    } else {
        header('location:index.php?insert_msg=User has been updated successfully!');
        exit; 
    }
}
?>
    




             <form action="update.php?id_new<?php echo $id;?>" method="post">
              <div class="form-group">
                <label for="id">User ID</label>
                <input type="text" name="id" class="form-control">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control">
             </div>
             <input type="submit" class="btn btn-success" name="update_user" value="Update">
            </form>

</body>
</html>