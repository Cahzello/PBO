<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peserta_didik";
$koneksi = new mysqli($servername, $username, $password, $dbname);

if(!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
}

$profil = "INSERT INTO profil (nama, ttl, alamat, jenis_kelamin) values
('Ganisa', '1975-03-04', 'Jl Sukma Jadi', 'Laki Laki'),  
('Hikaru', '1874-05-06', 'Jl Jadi Jadi', 'Laki Laki'),  
('Yazid', '1989-09-08', 'Jl Chad', 'Laki Laki')  
";

$nilai = "INSERT INTO nilai (nama, nilai_matematika, nilai_bahasaInggris, nilai_bahasaIndonesia) values
('Ganisa', '80', '58', '90'),
('Hikaru', '60', '20', '13'),
('Ganisa', '50', '43', '10')
";

if (mysqli_query($koneksi, $profil)){
    echo "Tabel berhasil dibuat";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

if (mysqli_query($koneksi, $nilai)){
    echo "tabel berhasil dibuat";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
