<?php
require_once 'Person.php';
class Staff extends Person
{
  public $nip;
  public $jabatan;
  public $gaji;

  public function __construct($nama, $age, $gender, $nip, $jabatan, $gaji)
  {
    parent::__construct($nama, $age, $gender);
    $this->nip = $nip;
    $this->jabatan = $jabatan;
    $this->gaji = $gaji;
  }
  public function cetak()
  {
    parent::cetak();
    echo "NIP : " . $this->nip . " <br>";
    echo "Jabatan : " . $this->jabatan . " <br>";
    echo "Gaji : " . $this->gaji . " <br>";
    echo "<hr>";
  }
}
