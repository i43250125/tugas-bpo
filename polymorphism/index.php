<?php
require_once 'Persegi.php';
require_once 'Lingkaran.php';
require_once 'Segitiga.php';

// Membuat Objek
$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(10, 8);

// Menampilkan Hasil
echo "## Hasil Perhitungan Luas ## <br>";
echo "Luas Persegi (sisi 5): " . $persegi->hitungLuas() . "<br>";
echo "Luas Lingkaran (r 7): " . round($lingkaran->hitungLuas(), 2) . "<br>";
echo "Luas Segitiga (10x8): " . $segitiga->hitungLuas() . "<br>";