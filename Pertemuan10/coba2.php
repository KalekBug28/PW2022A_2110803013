<?php
$mahasiswa = [["Joni", "123456", "Sistem Informasi", "Jonianjayy@gmail.com"],
                ["Agos", "21108371", "ilmu Kelautan", "AgusSlebew@gmail.com"],
                ["kikik", "211037537", "Ilmu Udara", "KikikMadon@gmail.com"],
                ["lordRico", "2173672233", "ilmu Bore-up", "ricobedecir@gmail.com"]
];
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
    <?php foreach ($mahasiswa as $mhs)  { ?>
     <ul>
        <li> <?= $mhs[0]; ?></li>
       <li> <?= $mhs[1]; ?></li>
       <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
    <?php   } ?>
</body>
</html>