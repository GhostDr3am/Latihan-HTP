<?php
$nama = "Rizky";
$totalBelanja = 300000;
$keterangan = "";

if ($totalBelanja > 100000) {
    $keterangan = "Selamat Anda Mendapatkan Hadiah";
} else {
    $keterangan = "Maaf Anda Tidak Mendapatkan Hadiah";
}
?>

Nama : <?php echo $nama; ?>
<br> Total Belanja : <?php echo $totalBelanja; ?>
<br> Keterangan : <?php echo $keterangan; ?>
