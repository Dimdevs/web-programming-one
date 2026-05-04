<?php

$nama = "Dimas Maulana";
$ttl = "Bogor, 23 Januari 20005";
$alamat = "Jl. Merdeka No. 123, Jakarta";
$telp = "081234567890";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <style>
        p {
            margin-bottom: 0px;
        }
    </style>
</head>

<body>

    <p>Nama: <?php echo $nama; ?></p>
    <p>Tempat Tanggal Lahir: <?php echo $ttl; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>No. Telepon: <?php echo $telp; ?></p>

</body>

</html>