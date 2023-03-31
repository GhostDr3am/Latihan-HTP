<?php
include_once 'Person.php';
class Dosen extends Person
{
  public $nidn;
  public $gelar;

  public function __construct($nama, $age, $gender, $nidn, $gelar)
  {
    parent::__construct($nama, $age, $gender);
    $this->nidn = $nidn;
    $this->gelar = $gelar;
  }
  public function cetak()
  {
    parent::cetak();
    echo "NIDN : " . $this->nidn . " <br>";
    echo "Gelar : " . $this->gelar . " <br>";
    echo "<hr>";
  }
}
