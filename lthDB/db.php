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

    function hapusAnggota($id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id_anggota =" . $id . "");

        if($query){
            echo "data berhasil dihapus";
            header('location:perpus.php');
        } else {
            echo 'data gagal dihapus';
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

    function insertBuku($buku, $pengarang){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "INSERT INTO tb_buku (judul_buku, pengarang) VALUE ('$buku', '$pengarang')");
        
        if($query){
            echo "Data berhasil ditambahkan";
            header('location:perpus.php');
        } else {
            echo "Penambahan Data Gagal";
        }
    }

    function hapusBuku($id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "DELETE FROM tb_buku WHERE id_buku =" . $id . "");

        if($query){
            echo "data berhasil dihapus";
            header('location:perpus.php');
        } else {
            echo 'data gagal dihapus';
        }
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

$db->readAnggota();
$db->readBuku();
$db->readPetugas();
// $db->insertAnggota($nama);

if(isset($_POST['submitAnggota'])){
    $nama = $_POST['nama_anggota'];
    $db->insertAnggota($nama);
}

if(isset($_POST['submitBuku'])){
    $buku = $_POST['nama_buku'];
    $pengarang = $_POST['nama_pengarang'];
    $db->insertBuku($buku, $pengarang);

}

if(isset($_GET['aksi'])){
    if(isset($_GET['aksi']) == 'hapus'){

        $id=$_GET['id'];
        $db->hapusAnggota($id);
    }
}

if(isset($_GET['aksi'])){
    if(isset($_GET['aksi']) == 'hapus'){

        $id=$_GET['id'];
        $db->hapusBuku($id);
    }
}
