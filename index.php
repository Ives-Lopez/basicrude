<?php
include'dbconn.php';
include'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>

<div class="box1">
<h1 id="main">STUDENT LIST</h1>
<h2 id="cyan">Name List</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENTS</button>
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
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label></label>
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>