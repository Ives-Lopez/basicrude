<?php
include'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>	
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
	
	
    




</body>
</html>