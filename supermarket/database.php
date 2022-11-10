<?php

class database{

    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "db_supermarket";

    function connectMySQL (){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if (!$koneksi){
            die("Koneksi ke DB gagal: " . mysqli_connect_error());
        } else {
            // echo "Koneksi ke DB {$this->dbName} Berhasil";
        }
    }

    function readBarang(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "select * from barang");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }

    function insertBarang($namaBarang, $totalBarang, $harga){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, total_barang, harga ) VALUE ('$namaBarang', '$totalBarang', '$harga')");

        if($query){
            echo "Data berhasil ditambahkan";
            header('location:index.php');
        } else {
            echo "Penambahan Data Gagal";
        }
    }

    function hapusBarang($id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang =" . $id . "");

        if($query){
            echo "data berhasil dihapus";
            header('location:index.php');
        } else {
            echo 'data gagal dihapus';
        }
    }

    function getBarangById($field, $id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang =" . $id ."");
        $data = mysqli_fetch_array($query);


        if($field == 'id_barang'){
            return $data['id_barang'];
        } else if ($field == 'nama_barang') {
            return $data['nama_barang'];
        } else if ($field == 'jumlah_barang'){
            return $data['total_barang'];
        } else if ($field == 'harga_barang'){
            return $data['harga'];
        }
    }

    function updateBarang($id, $namaBarang, $totalBarang, $harga){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE barang SET nama_barang = '$namaBarang', total_barang = '$totalBarang', harga = '$harga' WHERE id_barang = $id;");

        if($query){
            echo "data berhasil dihapus";
            header('location:index.php');
        } else {
            echo 'data gagal dihapus';
        }
    }

    function readPembelian(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "SELECT * from pembelian");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }

    function getNamaBarangById(){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "SELECT barang.nama_barang, pembelian.tanggal_pembelian, pembelian.quantity FROM barang LEFT JOIN pembelian ON barang.id_barang = pembelian.id_barang ORDER BY barang.id_barang");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }


    
    
}

$db = new database();
$db->connectMySQL();

$db->getNamaBarangById();
$db->readPembelian();
$db->readBarang();
// $db->insertAnggota($nama);

if(isset($_POST['submitBarang'])){
    $namaBarang = $_POST['nama_barang'];
    $totalBarang = $_POST['total_barang'];
    $harga = $_POST['harga'];
    $db->insertBarang($namaBarang, $totalBarang, $harga);
} else if (isset($_POST['prosesUpdateBarang'])){
    $id = $_POST['id_barang'];
    $barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah_barang'];
    $harga = $_POST['harga_barang'];
    $db->updateBarang($id, $barang, $jumlah, $harga);
} 

if(isset($_GET['aksi'])){
   if($_GET['aksi'] == 'hapusBarang'){
        $id=$_GET['id'];
        $db->hapusBarang($id);
   }

}       

if(isset($_GET['aksi'])){
    if(isset($_GET['aksi']) == 'update'){

        $id=$_GET['id'];
    }
}

