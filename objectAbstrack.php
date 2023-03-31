<?php
include 'hewan1.php';
include 'hewan2.php';
include 'hewan3.php';


$h1 = new Kucing();
$h2 = new Kambing();
$h3 = new Anjing();

$hwn = array($h1, $h2, $h3);

foreach ($hwn as $hewan) {
  $hewan->suara();
}
