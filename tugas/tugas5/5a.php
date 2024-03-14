<?php
// $mahasiswa = [
//     ["Desi Hafita Ashri", "233040165", "desihafitaashri.dha@gmail.com", "Teknik Informatika"],
//     ["Dwi Yulianti", "233040103", "dwiyulianti@gmail.com", "Teknik Informatika"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Desi Hafita Ashri",
        "nrp" => "233040165",
        "email" => "desihafitaashri.dha@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "desi.jpg",
    ],
    [
        "nama" => "Dwi Yulianti",
        "nrp" => "233040081",
        "email" => "dwiyulianti@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dwi.jpg",
    ],
    [
        "nama" => "Amaliyan Nur Haida Jum’ati",
        "nrp" => "233040082",
        "email" => "amaliyahnurhaida@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ama.jpg",
    ],
    [
        "nama" => "Dian Astri",
        "nrp" => "233040085",
        "email" => "dianastri@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dian.jpg",
    ],
    [
        "nama" => "Firda Faridatul Fajriyanti",
        "nrp" => "233040098",
        "email" => "firdafaridatulfajriyanti@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "firda.jpg",
    ],
    [
        "nama" => "Meta Cantika Dewi",
        "nrp" => "233040100",
        "email" => "metacantikadewi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "meta.jpg",
    ],
    [
        "nama" => "Silma Tsania Nurrasy",
        "nrp" => "233040107",
        "email" => "silmatsanianurrasy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "silma.jpg",
    ],
    [
        "nama" => "Icha Aprilia Putri",
        "nrp" => "233040108",
        "email" => "ichaapriliaputri@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "icha.jpg",
    ],
    [
        "nama" => "Maelani Ningrum",
        "nrp" => "233040164",
        "email" => "maelaniningrum@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "melan.jpg",
    ],
    [
        "nama" => "Valdric Abirama Pranaja Dandi",
        "nrp" => "233040163",
        "email" => "valdric.apd@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "valdric.jpg",
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>