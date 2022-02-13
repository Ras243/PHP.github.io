<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menghitung Gaji Karyawan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container"><br><center>
       <form action="" method="post">
        <h3 class="btn" style="background-color: #00ffff;">menghitung gaji karyawan CV.Rascoding.Com</h3><br>
        
    <div class="mb-2">
    <input name="gaji" type="number" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nominal Gaji">
    </div></center>
    <div class="mb-2">
    <input name="kerja" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Pekerjaan Anda ">
    </div></center>
    <input type="submit" name="total" value="Lihat hasil" /> 
</body>
</html>

<?php
if (isset($_POST['total'])){
      $gaji=$_POST['gaji'];
      $kerja=$_POST['kerja'];
    if ($kerja == "front end"){
      $pajak = 5/100 * $gaji;
      $gaji_bersih = $gaji - $pajak;
    }
    elseif ($kerja == "back end"){
      $pajak = 5/100 * $gaji;
      $gaji_bersih = $gaji - $pajak;
    }
    elseif ($kerja == "desain web"){
      $pajak = 5/100 * $gaji;
      $gaji_bersih = $gaji - $pajak;
    }
    else{
        $pajak = 2/100 * $gaji;
        $gaji_bersih = $gaji - $pajak;
    }

echo "<br><br>";
echo "<P>Pekerjaan  = $kerja ";
echo "<P>Gaji Kotor = Rp $gaji ";
echo "<P>Potongan = Rp $pajak ";
echo "<P>Gaji bersih = Rp $gaji_bersih";
}
?>