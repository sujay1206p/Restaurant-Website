<?php

$user_name = $_POST['username'];
$password = $_POST['password'];

?>

<table>
	<tr>
		<td>User Name :</td>
		<td>Password :</td>
	</tr>
	<tr>
		<td><?php echo $user_name;?></td>
		<td><?php echo $password;?></td>
	</tr>
</table>