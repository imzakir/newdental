<!DOCTYPE html>
<html>
<head>
	<title>Edit Data User</title>
</head>
<body>
	<h2>Edit Data User</h2><br><br>

	<form method="post" action="<?= base_url().'Users/act_edit/'.$users['id_user'] ?>">
		<label>Nama : </label><br>
		<input type="text" name="nama" value="<?= $users['nama'] ?>"><br>
		<label>Password : </label><br>
		<input type="password" name="password"><br>
		<button type="submit">submit</button>
	</form>
</body>
</html>