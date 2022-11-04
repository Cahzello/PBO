<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";
$koneksi = new mysqli($servername, $username, $password, $dbname);

if(!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
}

$sql = "CREATE TABLE pegawai (
    id_pegawai VARCHAR(4) PRIMARY KEY,
    nama_pegawai VARCHAR(20),
    alamat VARCHAR(30),
    tahun_masuk INT(4)

)";

if (mysqli_query($koneksi, $sql)){
    echo "Tabel berhasil dibuat";
} else {
    echo "tabel gagal dibuat" . "\n" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
