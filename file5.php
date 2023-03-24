<?php 
$nama = "Dedi";
$nilai = 85;

if ($nilai >= 85 && $nilai <= 100) {
    $grade = "A";
} else if ($nilai >= 75 && $nilai <= 84) {
    $grade = "B";
} else if ($nilai >= 60 && $nilai <= 74 ) {
    $grade = "C";
} else if ($nilai >= 55 && $nilai <= 64) {
    $grade = "D";
} else {
    $grade = "E";
}
switch ($grade) {
    case 'A':
        $predikat = "Memuaskan";
        break;
    case 'B':
        $predikat = "Bagus";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Buruk";
        break;
    default:
        $predikat = "";
        break;
}
?>
Nama Siswa : <?php echo $nama; ?>
<br> Nilai : <?php echo $nilai; ?>
<br> Grade : <?php echo $grade; ?>
<br> Predikat : <?php echo $predikat; ?>