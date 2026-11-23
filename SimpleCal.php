<?php
// A way to understand the basic of PHP is to create 
// a simple calculator that can calculate the total price 
// of an item based on its price and quantity purchased.
//  Below is a simple PHP code that demonstrates this concept.
$namaBarang = "Haunting Adeline";
$hargaBarang = 420000;
$stokBarang = 10;
$Jumlahbeli = 2;
$TotalHarga = $hargaBarang * $Jumlahbeli;

echo "==== SimpleCal ==== <br>";
echo "Nama Barang : $namaBarang <br>";
echo "Harga Barang : Rp" . $hargaBarang . "<br>";
echo "Stok Barang : $stokBarang <br>";
echo "Jumlah Beli : $Jumlahbeli <br>";
echo "Total Harga : Rp" . $TotalHarga . "<br>";

?>