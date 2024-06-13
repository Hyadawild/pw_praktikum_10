<?php

//Mendefinisikan variabel dengan berbagai macam tipe data
$nim = "21.11.0000";
$nama = "Haydar WIldan zacky";
$umur = 21;
$nilai = 92.2;
$status = TRUE;
//Menampilkan data
echo "NIM : ".$nim."<br>";
echo "Nama : $nama <br>";
print "Umur : ".$umur."<br>";
printf ("Nilai : %.3f<br>",$nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";

//Mendefinisikan nilai konstanta
define("nilaimax", "100");
define("pi", "3.14");
//Mencetak nilai konstanta
print("Nilai maksimal : ".nilaimax);
//Menggunakan konstanta dalam perhitungan
$jarijari = 5;
$luaslingkaran = pi*$jarijari*$jarijari;
echo "<br> Luas lingkaran = ".$luaslingkaran;
?>