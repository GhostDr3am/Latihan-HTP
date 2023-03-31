<?php
class Person
{
  public $nama;
  public $age;
  public $gender;

  public function __construct($nama, $age, $gender)
  {
    $this->nama = $nama;
    $this->age = $age;
    $this->gender = $gender;
  }
  public function cetak()
  {
    echo "Nama : " . $this->nama . " <br>";
    echo "Umur : " . $this->age . " <br>";
    echo "Jenis Kelamin :" . $this->gender . " <br>";
  }
}
