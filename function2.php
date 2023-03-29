<?php
function hitung($a, $b, $tombol)
{
  if ($tombol == '+') {
    $d = $a + $b;
  } elseif ($tombol == '-') {
    $d = $a - $b;
  } elseif ($tombol == '*') {
    $d = $a * $b;
  } elseif ($tombol == '/') {
    $d = $a / $b;
  } elseif ($tombol == '%') {
    $d = $a % $b;
  } else {
    $d = 'Tidak ada';
  }
  return $d;
}
?>
<form action="" method="post">
  <div class="inputan">
    <label for="a">Masukkan Angka</label>
    <input type="number" name="a" id="a"><br>
    <label for="b">Masukkan Angka</label>
    <input type="number" name="b" id="b">
    <select name="tombol" id="tombol">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
      <option value="%">%</option>
    </select>
    <button type="submit" name="submit">Hitung</button>
  </div>
  <div class="hasil">
    <?php
    if (isset($_POST['submit'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $tombol = $_POST['tombol'];
      $hasil = hitung($a, $b, $tombol);
      echo "Hasil dari $a $tombol $b = $hasil";
    }
    ?>
  </div>
</form>