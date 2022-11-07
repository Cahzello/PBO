<?php

$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "peserta_didik";
$koneksi = new mysqli($servername, $username, $password);

if(!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
}

$buat_db = "CREATE DATABASE peserta_didik";
if($koneksi->query($buat_db) === true){
    echo "databse berhasil dibuat" . "\n";
} else {
    echo "Databse gagal dibuat";
}

$profil = "CREATE TABLE profil (
    nisn int(3) primary key AUTO_INCREMENT,
    nama varchar(20),
    ttl varchar(30),
    alamat varchar(30),
    jenis_kelamin varchar(10)

)";

$nilai = "CREATE TABLE nilai (
    id_mapel int(3) primary key AUTO_INCREMENT,
    nama varchar(20),
    nilai_matematika int(2),
    nilai_bahasaInggris int(2),
    nilai_bahasaIndonesia int(2)
)";

$dbname = "peserta_didik";
$koneksi2 = new mysqli($servername, $username, $password, $dbname);

if (mysqli_query($koneksi2, $profil)){
    echo "Tabel berhasil dibuat" . "\n";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

if (mysqli_query($koneksi2, $nilai)){
    echo "tabel berhasil dibuat" . "\n";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

$profilData = "INSERT INTO profil (nama, ttl, alamat, jenis_kelamin) values
('Ganisa', '1975-03-04', 'Jl Sukma Jadi', 'Laki Laki'),  
('Hikaru', '1874-05-06', 'Jl Jadi Jadi', 'Laki Laki'),  
('Yazid', '1989-09-08', 'Jl Chad', 'Laki Laki')  
";

$nilaiData = "INSERT INTO nilai (nama, nilai_matematika, nilai_bahasaInggris, nilai_bahasaIndonesia) values
('Ganisa', '80', '58', '90'),
('Hikaru', '60', '20', '13'),
('Ganisa', '50', '43', '10')
";

if (mysqli_query($koneksi2, $profilData)){
    echo "Tabel berhasil dibuat" . "\n";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

if (mysqli_query($koneksi2, $nilaiData)){
    echo "tabel berhasil dibuat" . "\n";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}


$koneksi->close();

