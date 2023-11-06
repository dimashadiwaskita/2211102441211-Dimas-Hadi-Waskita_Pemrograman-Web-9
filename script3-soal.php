<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Mahasiswa Baru - Hasil</title>
</head>
<body>
	<h1>Terimakasih <?php echo $_POST["nama-lengkap"]; ?> sudah mengisi form pendaftaran.</h1>
	<p>Nama Lengkap: <?php echo $_POST["nama-lengkap"]; ?></p>
	<p>Tempat Lahir: <?php echo $_POST["tempat-lahir"]; ?></p>
	<p>Tanggal Lahir: <?php echo $_POST["tanggal"] . "-" . $_POST["bulan"] . "-" . $_POST["tahun"]; ?></p>
	<p>Alamat Rumah: <?php echo $_POST["alamat-rumah"]; ?></p>
	<p>Jenis Kelamin: <?php echo $_POST["jenis-kelamin"]; ?></p>
	<p>Asal Sekolah: <?php echo $_POST["asal-sekolah"]; ?></p>
	<p>Nilai UAN: <?php echo $_POST["nilai-uan"]; ?></p>
</body>
</html>