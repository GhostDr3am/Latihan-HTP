<?php
include 'Mahasiswa.php';
include 'Dosen.php';
include 'Staff.php';

$mhs1 = new Mahasiswa("Rizky", 20, "Laki-laki", "123456789", "Teknik Informatika", 3.5);
$mhs2 = new Mahasiswa("Rizky", 20, "Laki-laki", "123456789", "Teknik Informatika", 3.5);
$mhs3 = new Mahasiswa("Rizky", 20, "Laki-laki", "123456789", "Teknik Informatika", 3.5);

$dsn1 = new Dosen("Udin", 20, "Laki-laki", "123456789", "S.Kom");
$dsn2 = new Dosen("Ilham", 20, "Laki-laki", "123456789", "S.Kom");

// array staff
$st1 = new Staff("Dedi", 20, "Laki-laki", "123456789", "Staff", 1000000);
$st2 = new Staff("Dono", 20, "Laki-laki", "123456789", "Staff", 1000000);


$mhs = array($mhs1, $mhs2, $mhs3);
$dsn = array($dsn1, $dsn2);
$st = array($st1, $st2);

foreach ($mhs as $mahasiswa) {
  $mahasiswa->cetak();
}
foreach ($dsn as $dosen) {
  $dosen->cetak();
}
foreach ($st as $staff) {
  $staff->cetak();
}
