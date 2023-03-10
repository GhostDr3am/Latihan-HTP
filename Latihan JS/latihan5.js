let pelanggan = 'Dedi'
let produk = 'Buku'

if (produk == 'Buku') {
  harga = 10000
} else if (produk == 'Pulpen') {
  harga = 5000
} else if (produk == 'Penghapus') {
  harga = 3000
} else {
  harga = 0
}

let jmlBeli = 13
let total = harga * jmlBeli

let diskon = (produk == 'Buku') ? 0.1 * total : 0
let harga_diskon = total - diskon;

document.write("Data Pembelian " +
  "<br> Pelanggan " + pelanggan +
  "<br> Produk yang dibeli " + produk +
  "<br> Harga Satuan" + harga +
  "<br> Jumlah Barang yang di Beli " + jmlBeli +
  "<br> Total Harga Pembelian" + total +
  "<br> Hasil Diskon" + harga_diskon +
  "<br> Terima Kasih")
