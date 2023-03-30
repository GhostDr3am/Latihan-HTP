<?php
class Bank
{
  // Member variabel
  protected $norek;
  public $nama;
  private $saldo;
  static $jml = 0;
  const BANK = "Bank BCA";
  // Constructor
  public function __construct($norek, $nama, $saldo)
  {
    $this->norek = $norek;
    $this->nama = $nama;
    $this->saldo = $saldo;
    self::$jml++;
  }
  // Destructor
  public function setor($uang)
  {
    $this->saldo += $uang;
  }
  public function ambil($uang)
  {
    $this->saldo -= $uang;
  }

  public function cetak()
  {
    echo  "Bank : " . self::BANK . "<br>";
    echo "No Rekening : " . $this->norek . "<br>";
    echo "Nama Nasabah : " . $this->nama . "<br>";
    echo "Saldo : Rp. " . number_format($this->saldo, 0, ',', '.') . "<br>";
    echo "<hr>";
  }
}
