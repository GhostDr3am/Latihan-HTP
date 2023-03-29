<?php
// contoh fungsi void
function salam()
{
  echo "Selamat Pagi";
}
salam();


// contoh fungsi dengan parameter
function sayHello($nama, $umur)
{
  echo "Hello $nama, umur kamu $umur tahun";
}
sayHello("Rizky", 20);

function tambah($a, $b)
{
  $c = $a + $b;
  return $a + $b;
}
$x = 10;
$y = 20;
echo 'Hasil penjumlahan ' . $x . ' + ' . $y . ' = ' . tambah($x, $y);

// function bilangan prima 
function prima($angka)
{
  $prima = true;
  for ($i = 2; $i < $angka; $i++) {
    if ($angka % $i == 0) {
      $prima = false;
    }
  }
  return $prima;
}
if (prima(7)) {
  echo "Bilangan prima";
} else {
  echo "Bukan bilangan prima";
}
