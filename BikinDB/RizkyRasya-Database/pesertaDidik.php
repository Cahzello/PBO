<?php

$servername = "localhost";
$username = "root";
$password = "";
$koneksi = new mysqli($servername, $username, $password);

if(!$koneksi){
    die("koneksi gagal");
}

$buat_db = "CREATE DATABASE peserta_didik";
if($koneksi->query($buat_db) === true){
    echo "databse berhasil dibuat";
} else {
    echo "Databse gagal dibuat";
}

$koneksi->close();

