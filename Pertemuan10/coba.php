<?php
$mahasiswa = ["Joni", "123456", "Sistem Informasi", "Jonianjayy@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li> <?php echo $mhs ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>