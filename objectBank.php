<?php
require_once 'Bank.php';
$nasabah1 = new Bank("1234567890", "Budi", 1000000);
$nasabah2 = new Bank("0987654321", "Susi", 2000000);
$nasabah3 = new Bank("1357924680", "Rudi", 3000000);
$nasabah4 = new Bank("0832849283", "Dedi", "23400000000");

$dataNasabah = array($nasabah1, $nasabah2, $nasabah3, $nasabah4);


// setor uang dan ambil uang
$nasabah1->setor(100000);
$nasabah2->ambil(200000);
$nasabah3->setor(300000);
// cetak semua nasabah
foreach ($dataNasabah as $nasabah) {
  $nasabah->cetak();
}
echo "<br> Jumlah Nasabah di Bank " . Bank::$jml . " Orang";
