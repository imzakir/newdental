<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<h3>Data User</h><br><br>
	<table border="1">
		<tr bgcolor="orange">
			<th>ID USER</th>
			<th>NAMA</th>
			<th>ROLE</th>
			<th>ACTION</th>
		</tr>
	<?php foreach($users as $user){ ?>
		<tr bgcolor="aqua">
			<td><?= $user->id_user ?></td>
			<td><?= $user->nama ?></td>
			<td><?= $user->role_user ?></td>
			<td><a href="<?= base_url().'Users/edit_user/'.$user->id_user ?>">Edit</a> || <a href="<?= base_url().'Users/delete_user/'.$user->id_user ?>">Delete</a></td>
		<tr>
	<?php } ?>
	</table><br><br>

	<a href="<?= base_url().'Users/add_user'?>">Add User</a>
</body>
</html>