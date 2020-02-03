<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<h2>Add User</h2><br><br>
	<form method="post" action="<?= base_url().'Users/act_add' ?>">
		<label>Nama :</label><br>
		<input type="text" name="nama"><br>
		<label>Username :</label><br>
		<input type="text" name="username"><br>
		<label>Password :</label><br>
		<input type="text" name="password"><br>
		<label>Role User :</label><br>
		<select>
			<option value="" selected=""></option>
			<option value="Dokter">Dokter</option>
			<option value="Admin">Admin</option>
			<option value="Suster">Suster</option>
		</select><br><br>

		<button type="submit">add</button>
	</form>
</body>
</html>