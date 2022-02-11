<?php

// array associative 
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Nurrasuli",
        "nim" => "D0221399",
        "jurusan" => "Teknik Informatika",
        "alamat" => "Pasangkayu",
        "gambar" => "Rasul.jpg"
    ],
    [
        "nama" => "Rascoding",
        "nim" => "D0221400",
        "jurusan" => "Teknik Industri",
        "alamat" => "Japan",
        "gambar" => "Rascoding.jpg"
    ]
];

echo $mahasiswa[1]["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>array associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <img src="img/<?= $mhs["gambar"] ?>">
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Alamat : <?= $mhs["alamat"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>