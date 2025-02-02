<?php
include'dbconn.php';
include'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>


<h1 id="main">Crud User List</h1>
<div class="container">
  <div class="box1">
    <h2>User List</h2>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add User</button>
  </div>
</div>

<div class="container mt-3">
  <table class="table table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Address</th>
		    <th>Contact</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $row="select * from users";
      $result=$conn->query($row);
          while($userList=$result->fetch_assoc()){ 
      ?>
      <tr>
        <td><?=$userList['id']?></td>
        <td><?=$userList['name']?></td>
        <td><?=$userList['address']?></td>
        <td><?=$userList['contact']?></td>
        <td><a href="update.php?id=<?php echo $userList['id'] ?>"class="btn btn-success">Update</a></td>
        <td><a href="delete.php?id=<?php echo $userList['id'] ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php 
          }
      ?>
    </tbody>

  </table>

        <!--message for error name and success-->
  <?php
  if(isset($_GET['message'])){
    echo "<h6>".$_GET['message']."<h6>";
  }
  ?>
  <?php

  if(isset($_GET['insert_msg'])){
    echo "<h6>".$_GET['insert_msg']."<h6>";
  }


?>
</div>
  

  <!-- Modal -->
  <form action="insert.php" method="post">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <div class="mode1">
                <p><b>Add User</b></p>
              </div>
              <div class="form-group">
                <label for="id">User ID</label>
                <input type="text" name="id" class="form-control" placeholder="user id...">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"  placeholder="name...">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control"  placeholder="address...">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control"  placeholder="contact...">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-secondary" name="add_user" value="Save">
          </div>
        </div>
      </div>
    </div>
  </form>
  
</div>

  





</body>
</html>