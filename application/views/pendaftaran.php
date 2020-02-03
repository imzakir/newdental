<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran pasien</title>
</head>
<body>
	<form method="post" action="<?= base_url().'Pendaftaran/add_pasien' ?>">
		<label>nama pasien :</label><br>
		<input type="text" name="nama_pasien"><br>
		<label>jenis kelamin :</label><br>
		<select name="kelamin">
			<option value="" selected></option>
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perepuan</option>
		</select>
		<label>alamat :</label><br>
		<input type="text" name="alamat"><br>
		<label>umur :</label><br>
		<input type="text" name="umur"><br>
		<label>tanggal lahir :</label><br>
		<input type="date" name="tgl_lahir"><br>
		<label>kontak :</label><br>
		<input type="text" name="kontak"><br>
		<button type="submit">submit</button>
	</form>
</body>
</html>