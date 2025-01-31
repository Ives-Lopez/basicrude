<?php
include'../pluggins/bootstrap.php';
include'../config/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Display Text Input Fields</h1>

<form action="/action_page.php">
  <label for="fname">First name: </label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name: </label>
  <input type="text" id="lname" name="lname"><br><br>
  
  <input type="submit" value="Add">
</form>

<center>
	<div class="col-8">
	<h3>USERS MANAGEMENT</h3>
		<table class="table table-bordered tablehovered">
			<tr>
				<th>USER NUMBER</th>
				<th>NAME</th>
				<th>ADDRESS</th>
				<th>CONTACT</th>

			</tr>
			
			<?php
			$sqlListofUsers="SELECT * FROM users";
			$result=$conn->query($sqlListofUsers);
				while($userList=$result->fetch_assoc()){
				
			
			?>
				<tr>
					<td><?=$userList['User_number']?></td>
					<td><?=$userList['Name']?></td>
					<td><?=$userList['address']?></td>
					<td><?=$userList['contact']?></td>
				</tr>
			
			
			
			<?php
			
					}
			
			?>
			
		</table>
	
	</center>
    




</body>
</html>