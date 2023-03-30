<?php
require 'Gempa.php';
// data gempa
$gp = array(
  array("Sulawesi", 6),
  array("Sulawesi", 6),
  array("Jawa", 4),
  array("Sumatera", 2),
  array("Kalimantan", 8),
  array("Papua", 3)
);

foreach ($gp as $gempa) {
  $gempa = new Gempa($gempa[0], $gempa[1]);
  $gempa->cetak();
}
