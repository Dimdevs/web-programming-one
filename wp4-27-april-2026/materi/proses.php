<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$education = isset($_POST['education']) ? $_POST['education'] : '';
$hobbies = isset($_POST['hobby1']) ? $_POST['hobby1'] : '';
$hobbies .= isset($_POST['hobby2']) ? ', ' . $_POST['hobby2'] : '';
$hobbies .= isset($_POST['hobby3']) ? ', ' . $_POST['hobby3'] : '';

if(empty($name) || empty($description) || empty($gender) || empty($education)) {
    echo "Semua field harus diisi!";
    exit;
}

if(!in_array($gender, ['Laki - Laki', 'Perempuan'])) {
    echo "Gender tidak valid!";
    exit;
}

if(!in_array($education, ['SD', 'SMP', 'SMA'])) {
    echo "Pendidikan tidak valid!";
    exit;
}

echo "<h1>Data yang Dikirim:</h1>";
echo "<p><strong>Nama:</strong> " . htmlspecialchars($name) . "</p>";
echo "<p><strong>Deskripsi:</strong> " . nl2br(htmlspecialchars($description)) . "</p>";
echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
echo "<p><strong>Pendidikan:</strong> " . htmlspecialchars($education) . "</p>";
echo "<p><strong>Hobby:</strong> " . htmlspecialchars($hobbies) . "</p>";

?>