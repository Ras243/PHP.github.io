<!DOCTYPE html>
<html lang="en">
<head>
    <title>belajar percabangan</title>
</head>
<body>
<div style="text-align:center">
    <h3 class="btn" style="background-color: #00ffff;">Melihat hasil ujian Siswa/i SMKN 1 Pasangkayu</h3><br>
</div>
    <form method="post" action="">
        masukkan nama = <input type="text" name="nama" /><br /><br /> 
        masukkan nilai ujian sekolah = <input type="number" name="nus"/><br /><br />  
        masukkan nilai ujian nasional = <input type="number" name="nun" /><br /><br /> 
        <input type="submit" name="lihat_hasil" value="Lihat hasil" /> 
    </form>
<?php
if (isset($_POST['lihat_hasil'])) {
    $nama=$_POST['nama'];
    $nus=$_POST['nus'];
    $nun=$_POST['nun'];

    echo "<P>NAMA siswa/i  = $nama ";
    echo "<P>Nilai US  = $nus ";
    echo "<P>Nilai UN  = $nun ";
    echo "<br><br>";
    if ($nus > 100) {
        echo "nilai tidak terbaca!";
    }
    elseif ($nun > 100) {
        echo "nilai tidak terbaca!";
    }
    elseif ($nus >= 80 && $nun >= 70) {
        echo "Anda lulus";
    }
    elseif ($nus >= 70 && $nun >= 60) {
        echo "Anda mendapatkan kesempatan untuk mengikuti ujian ulang";
    }
    else {
        echo "Anda tidak lulus";
    }
}
?>
</body>
</html>
