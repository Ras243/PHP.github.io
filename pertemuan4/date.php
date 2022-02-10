<?php
// date: untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");
echo '<br>';

// time: detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo '<br>';

// menampilkan hari apa pada 100 hari kedepan
echo date("l", time()+60*60*24*100);
echo '<br>';

// mktime: membuat sendiri detik
// mengetahui hari apa saya lahir
echo date("l", mktime(0,0,0,4,2,2003));
echo '<br>';
// atau dengan menggunakan strtotime
echo date("l", strtotime("2 april 2003"));
?>
