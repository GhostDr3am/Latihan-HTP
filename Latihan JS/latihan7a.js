let pelanggan = 'Dedi'
let produk = 'TV'
let harga = 0


switch (produk) {
  case 'TV': harga = 2000000; break;
  case 'Kulkas': harga = 3000000; break;
  case 'Mesin Cuci': harga = 4000000; break;
  default: harga = 0
}

let jmlBeli = 3
let total = harga * jmlBeli
let diskon = 0
let ppn = total * 0.1
let hasil_diskon = total - diskon




if (produk == 'TV') {
  diskon = 0.3 * total
} else if (produk == 'Kulkas') {
  diskon = 0.2 * total
} else {
  diskon = 0.05 * total
}

document.write('Data Pembelian<br>' +
  'Pelanggan: ' + pelanggan + '<br>'
  + 'Produk: ' + produk + '<br>'
  + 'Jumlah beli produk : ' + jmlBeli + '<br>'
  + 'Harga satuan : ' + 'Rp. ' + harga + '<br>'
  + 'Total harga : ' + 'Rp. ' + total + '<br>'
  + 'Diskon : ' + 'Rp. ' + diskon + '<br>'
  + 'PPN : ' + 'Rp. ' + ppn + '<br>'
  + 'Total dipotong diskon : ' + 'Rp. ' + hasil_diskon + '<br>')