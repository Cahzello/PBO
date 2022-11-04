<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peserta_didik";
$koneksi = new mysqli($servername, $username, $password, $dbname);

if(!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
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
