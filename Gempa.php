<?php
class Gempa
{
  private $lokasi;
  private $skala;
  // constructor
  public function __construct($lokasi, $skala)
  {
    $this->lokasi = $lokasi;
    $this->skala = $skala;
  }
  private function dampak($skala)
  {
    $this->skala = $skala;
    if ($skala >= 0 && $skala <= 2)
      $dampak = "Tidak Terasa";
    elseif ($skala > 2 && $skala <= 4)
      $dampak = "Bangunan Retak-retak";
    elseif ($skala > 4 && $skala <= 6)
      $dampak = "Rumah Rusak Berat";
    else $dampak = "Berpotensi tsunami";
    return $dampak;
  }

  public function cetak()
  {
    echo "Gempa berlokasi di " . $this->lokasi . " dengan skala " . $this->skala . " mengakibatkan " . $this->dampak($this->skala);
    echo "<hr>";
  }
}
