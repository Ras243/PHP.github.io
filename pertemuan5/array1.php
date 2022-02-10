<?php
// array : variabel yang menampung/memiliki banyak nilai

// membuat array
$hari = ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
$data = ["Rascoding", 18, "Pasangkayu", "Mahasiswa"];

// menampilkan array
var_dump($hari);
echo "<br>";
print_r($data);
echo "<br>";

# menambah array
$hari [3] = "Minggu";
var_dump($hari);
echo "<br>";

// menampilkan 1 elemen pada array
echo $hari[2]; 
echo "<br>";
echo $data[2];
echo "<br>";

?>