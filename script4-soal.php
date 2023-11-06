<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru - Hasil</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $namaLengkap = $_GET['nama-lengkap'];
        $tempatLahir = $_GET['tempat-lahir'];
        $tanggalLahir = $_GET['tanggal'];
        $bulanLahir = $_GET['bulan'];
        $tahunLahir = $_GET['tahun'];
        $alamatRumah = $_GET['alamat-rumah'];
        $jenisKelamin = $_GET['jenis-kelamin'];
        $asalSekolah = $_GET['asal-sekolah'];
        $nilaiUAN = $_GET['nilai-uan'];

        echo "<h1>Terimakasih $namaLengkap sudah mengisi form pendaftaran.</h1>";
        echo "<p>Nama Lengkap: $namaLengkap</p>";
        echo "<p>Tempat Lahir: $tempatLahir</p>";
        echo "<p>Tanggal Lahir: $tanggalLahir-$bulanLahir-$tahunLahir</p>";
        echo "<p>Alamat Rumah: $alamatRumah</p>";
        echo "<p>Jenis Kelamin: $jenisKelamin</p>";
        echo "<p>Asal Sekolah: $asalSekolah</p>";
        echo "<p>Nilai UAN: $nilaiUAN</p>";
    }
    ?>
</body>
</html>
