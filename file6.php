
<form action="" method="get">
  <label for="">Nama</label> <br>
  <input type="text" name="nama" id=""> <br>
  <label for="">Alamat</label> <br>
  <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
  <input type="submit" name="proses" value="Submit">
</form>

<?php 
error_reporting(0);
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$proses = $_GET['proses'];

if (isset($proses)) {
  echo "Nama : $nama <br>";
  echo "Alamat : $alamat <br>";
}
?>