<?php
$mahasiswa = [
    ["Nurrasuli", "D0221399", "Teknik Informatika", "nurrasuli29@gmail.com"],
    ["Rascoding", "D0221340", "Teknik Informasi", "nurrasuli30@gmail.com"],
    ["Rasul", "D0221341", "Teknik Komputer", "nurrasuli31@gmail.com"],

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    : <?= $mhs[0]; ?></li>
        <li>NIM     : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email   : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>