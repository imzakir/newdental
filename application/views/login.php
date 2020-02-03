<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login to Dental App</h2>
	<form method="post" action="<?= base_url().'Login/action_login' ?>">
		<label>username :</label><br>
		<input type="text" name="username"><br>
		<label>password :</label><br>
		<input type="password" name="password"><br>
		<button type="submit">login</button>
	</form>
</body>
</html>