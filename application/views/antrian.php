<!DOCTYPE html>
<html>
<head>
	<title>Antrian</title>
</head>
<body>
	<form method="post" action="<?= base_url().'Pendaftaran/add_antrian' ?>">
		<label>ID Pasien :</label><br>
		<input type="text" name="id_pasien"><br>
		<button type="submit">submit</button>
	</form>
</body>
</html>