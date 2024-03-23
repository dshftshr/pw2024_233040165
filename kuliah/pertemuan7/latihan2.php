<?php 
// SUPERGLOBALS
// Variable global milik php
// merupakan Array Associative

// $_GET
$mahasiswa = [
    [
        "nrp" => "233040165",
        "nama" => "Desi Hafita Ashri",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nrp" => "033040001",
        "nama" => "Doddy Ferdiansyah",
        "jurusan" => "Teknik Industri",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>
            &jurusan= <?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>