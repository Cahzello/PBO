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
        $query = mysqli_query($koneksi, "SELECT * from pembelian JOIN barang ON pembelian.id_barang = barang.id_barang");

        while ($row = mysqli_fetch_array($query)){
            $data[]= $row;
        }
        return $data;
    }

    function insertPembelian($tanggal, $kuantitas, $barang){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "INSERT INTO pembelian (tanggal_pembelian, quantity, id_barang) VALUE ('$tanggal', '$kuantitas', '$barang')");

        if($query){
            echo "Data berhasil ditambahkan";
            header('location:index.php');
        } else {
            echo "Penambahan Data Gagal" . "<br>";
            echo mysqli_error($koneksi);
        }
    }

    function hapusPembelian($id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "DELETE FROM pembelian WHERE id_pembelian =" . $id . "");

        if($query){
            echo "data berhasil dihapus";
            header('location:index.php');
        } else {
            echo 'data gagal dihapus';
        }
    }

    function updatePembelian($id, $tanggal, $barang, $qt){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE pembelian SET tanggal_pembelian = '$tanggal', id_barang = '$barang', quantity = '$qt' WHERE id_pembelian = $id;");

        if($query){
            echo "data berhasil dihapus";
            header('location:index.php');
        } else {
            echo 'Update Data Gagal' . "<br>" . "<br>";
            echo mysqli_error($koneksi);
        }
    }

    function getPembelianById($field, $id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_pembelian =" . $id ."");
        $data = mysqli_fetch_array($query);


        if($field == 'tanggal'){
            return $data['tanggal_pembelian'];
        } else if ($field == 'namaBarang') {
            return $data['nama_barang'];
        } else if ($field == 'quantity'){
            return $data['quantity'];
        } 
    }
}

$db = new database();
$db->connectMySQL();

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
} else if (isset($_POST['submitPembelian'])){
    $tanggal = $_POST['tanggal'];
    $kuantitas = $_POST['kuantitas'];
    $barang = $_POST['barang'];
    $db->insertPembelian($tanggal, $kuantitas, $barang);
} else if (isset($_POST['prosesUpdatePembelian'])){
    $id = $_POST['id_pembelian'];
    $tanggal = $_POST['tanggal'];
    $barang = $_POST['namaBarang'];
    $qt = $_POST['quantity'];
    $db->updatePembelian($id ,$tanggal, $barang, $qt);
}

if(isset($_GET['aksi'])){
   if($_GET['aksi'] == 'hapusBarang'){
        $id=$_GET['id'];
        $db->hapusBarang($id);
   }

}

if(isset($_GET['aksi'])){
    if($_GET['aksi'] == 'hapusPembelian'){
         $id=$_GET['id'];
         $db->hapusPembelian($id);
    }
 
 } 

if(isset($_GET['aksi'])){
    if(isset($_GET['aksi']) == 'update'){

        $id=$_GET['id'];
    }
}

