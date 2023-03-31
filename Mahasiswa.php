<?php
include 'Person.php';
class Mahasiswa extends Person
{
  public $nim;
  public $jurusan;
  public $ipk;
  public function __construct($nama, $age, $gender, $nim, $jurusan, $ipk)
  {
    parent::__construct($nama, $age, $gender);
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    $this->ipk = $ipk;
  }
  public function cetak()
  {
    parent::cetak();
    echo "NIM : " . $this->nim . " <br>";
    echo "Jurusan : " . $this->jurusan . " <br>";
    echo "IPK : " . $this->ipk . " <br>";
    echo "<hr>";
  }
}
