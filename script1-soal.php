<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>

    <?php
    if (isset($_POST['hitungSaldo'])) {
        $saldoAwal = $_POST['saldoAwal'];
        $bungaBulan = $_POST['bungaBulan'] / 100; // Mengubah persentase ke desimal
        $jumlahBulan = $_POST['jumlahBulan'];

        $saldoAkhir = $saldoAwal;

        for ($i = 1; $i <= $jumlahBulan; $i++) {
            $saldoAkhir += $saldoAkhir * $bungaBulan;
        }

        echo "Saldo akhir setelah $jumlahBulan bulan adalah: Rp. " . number_format($saldoAkhir, 2) . ",-";
    }
    ?>
</body>
</html>
