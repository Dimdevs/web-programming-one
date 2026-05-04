<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONDITION MATERI</title>
</head>

<body>
    <?php
    $nilai = 40;

    if ($nilai > 50) {
        echo "Selamat Nilai Anda Lulus Ujian: " . $nilai;
    } else {
        echo "Nilai Anda Tidak Lulus Ujian: " . $nilai;
    }
    ?>
</body>

</html>