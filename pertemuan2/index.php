<?php
// Pertemuan 2 - PHP Dasar
// sintaks PHP

// Standar PHP
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
// Variabel dan Tipe Data
// Variabel

// Penggabungan String
$nama_depan = "Rasul";
$nama_belakang = "ras";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// Assigment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 242;
echo $x;
echo "<br>";

$nama = "Rascoding";
$nama .= " ";
$nama .= "PHP";
echo $nama;
echo "<br>";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
echo "<br>";

// identitas
// ===, !==
var_dump(1 === 5);
echo "<br>";

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 &&  $x % 2 == 0);
?>