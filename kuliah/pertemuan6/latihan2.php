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
        "gambar" => "desi.jpg"
    ],
    [
        "nama" => "Dwi Yulianti", 
        "nrp" => "233040103",
        "email" => "dwiyulianti@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dwi.jpg"
    ]
]; 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>