<?php

$kenny = "Kenny";

$nama = "Dimas Maulana";
$nim = "21081010128";
$kelas = "TI-1A";


$jml = 5;
$harga = 10000;
$total = $jml * $harga;

define("title", "Belajar PHP");

define("phi", 3.14);

$r=8;
$luas = phi * $r * $r;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?></title>
</head>

<body>

    <h1><?= $kenny ?></h1>
    <h1><?= $nama ?></h1>
    <h1><?= $nim ?></h1>
    <h1><?= $kelas ?></h1>
    <h1>Total: <?= $total ?></h1>
    <h1>Luas Lingkaran: <?= $luas ?></h1>

</body>

</html>