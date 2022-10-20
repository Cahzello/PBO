<?php

class database{

    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "db_perpus";

    function connectMySQL (){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if (!$koneksi){
            die("Koneksi ke DB gagal: " . mysqli_connect_error());
        } else {
            // echo "Koneksi ke DB {$this->dbName} Berhasil";
        }
    }

    function readAnggota(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "select * from tb_anggota");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }

    function insertAnggota($nama){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "INSERT INTO tb_anggota (nama_anggota) VALUE ('$nama')");

        if($query){
            echo "Data berhasil ditambahkan";
            header('location:perpus.php');
        } else {
            echo "Penambahan Data Gagal";
        }
    }

    function readBuku(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "select * from tb_buku");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }

    function readPetugas(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "select * from tb_petugas_perpus");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }
}

$db = new database();
$db->connectMySQL();

if(isset($_POST['submitAnggota'])){
    $nama = $_POST['nama_anggota'];
    $db->insertAnggota($nama);
}


$db->readAnggota();
$db->readBuku();
$db->readPetugas();
// $db->insertAnggota($nama);
