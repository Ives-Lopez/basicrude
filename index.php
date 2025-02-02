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
  <table class="table table-hover">
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
      $sqlListofUsers="select * from users";
      $result=$conn->query($sqlListofUsers);
          while($userList=$result->fetch_assoc()){ 
      ?>
      <tr>
        <td><?=$userList['User_number']?></td>
        <td><?=$userList['Name']?></td>
        <td><?=$userList['Address']?></td>
        <td><?=$userList['contact']?></td>
      </tr>
      <?php 
          }
      ?>
    </tbody>

  </table>

  

  <!-- Modal -->
  <form>
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
                <label for="User_number">User ID</label>
                <input type="text" name="User_number" class="form-control">
              </div>
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="Nmae" class="form-control">
              </div>
              <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="Address" class="form-control">
              </div>
              <div class="form-group">
                <label for="Contact">Contact</label>
                <input type="text" name="Contact" class="form-control">
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