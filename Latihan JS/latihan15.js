function tambah() {
  var frm = document.getElementById('kalkulator');
  var a1 = parseFloat(frm.angka.value);
  var a2 = parseFloat(frm.angka2.value);
  var total = a1 + a2;
  frm.hasil.value = total;
}

function kurang() {
  var frm = document.getElementById('kalkulator');
  var a1 = parseFloat(frm.angka.value);
  var a2 = parseFloat(frm.angka2.value);
  var total = a1 - a2;
  frm.hasil.value = total;
}

/*tugas ke 4 Javascript
1. Lengkapilah form dari latihan 15js menggunakan CSS dan table 
2. Perbagus tampilannya 
3. Lengkapi perhitungannya dengan:
- pembagian
- perkalian
- pangkat
4. jika form input dari angka 1 dan 2 kosong dan user klik button, 
maka tampilkan "Maaf angka belum terisi"


*/