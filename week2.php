<?php
$nama = "Lintang";
$kelas = "Mi20b";
$alamat = "singaparna";
$hoby = "vollyball";
$matkul =array(
    'hard' => "progremming",
    'medium' => "SDA",
    'easy' => "ESP",
);
 ?>
<!DOCTYPE html>
<html>
<head>
    <title> WEEK 1 - Lintang</title>
</head>
<body>
    <?php
        echo "BIODATA";
        echo "<br>"; //untuk memberikan spasi
        echo "<br>";
        echo "Nama : ".$nama. "Fauzi";
        echo "<br>";
        echo "Kelas : ".$kelas;
        echo "<br>";
        echo "Alamat : ".$alamat;
        echo "<br>";
        echo "Hoby: ".$hoby;
        echo "<br>";
        // aray
        echo "<br>";
        echo "saya mengambil mata kuliah sebagai berikut:";
        echo "<br>";
        echo " 1.".$matkul['hard'];
        echo "<br>";
        echo " 2.".$matkul['medium'];
        echo "<br>";
        echo " 3 .".$matkul['easy'];
    ?>
</body>
</html>
