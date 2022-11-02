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

    function editAnggota($id, $nama){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE tb_aggota SET nama_anggota = '$nama' WHERE id_anggota = $id;");

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

    function insertPetugas($namaPetugas, $username){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "INSERT INTO tb_petugas_perpus (nama_petugas, username) VALUE ('$namaPetugas', '$username')");
        
        if($query){
            echo "Data berhasil ditambahkan";
            header('location:perpus.php');
        } else {
            echo "Penambahan Data Gagal";
        }
    }

    function hapusPetugas($id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "DELETE FROM tb_petugas_perpus WHERE id_petugas =" . $id . "");

        if($query){
            echo "data berhasil dihapus";
            header('location:perpus.php');
        } else {
            echo 'data gagal dihapus';
        }
    }

    function getAnggotaById($field, $id){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota =" . $id ."");
        $data = mysqli_fetch_array($query);


        if($field == 'id_anggota'){
            return $data['id_anggota'];
        } else if ($field == 'nama_anggota') {
            return $data['nama_anggota'];
        }
    }

    function updateDataAnggota($id, $nama){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_anggota = '$nama' WHERE id_anggota = '$id' ");

        if($query){
            echo "Data Berhasil Diupdate";
            header('location:perpus.php');
        } else {
            echo "Data Gagal Diupdate";
        }
    }

    function updateDataBuku($id, $judul, $pengarang){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE tb_buku SET judul_buku = '$judul', pengarang = '$pengarang' WHERE id_buku = '$id' ");

        if($query){
            echo "Data Berhasil Diupdate";
            header('location:perpus.php');
        } else {
            echo "Data Gagal Diupdate";
        }
    }

    function updateDataPetugas($id, $petugas, $username){
        $koneksi = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($koneksi, "UPDATE tb_petugas_perpus SET nama_petugas = '$petugas', username = '$username' WHERE id_petugas = '$id' ");

        if($query){
            echo "Data Berhasil Diupdate";
            header('location:perpus.php');
        } else {
            echo "Data Gagal Diupdate";
        }
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
} else if (isset($_POST['prosesUpdateAnggota'])){
    $id = $_POST['id_anggota'];
    $nama = $_POST['nama_anggota'];
    $db->updateDataAnggota($id, $nama);
} else if (isset($_POST['prosesUpdateBuku'])){
    $id = $_POST['id_buku'];
    $buku = $_POST['namaBuku'];
    $pengarang = $_POST['namaPengarang'];
    $db->updateDataBuku($id, $buku, $pengarang);
} else if (isset($_POST['prosesUpdatePetugas'])){
    $id = $_POST['id_petugas'];
    $petugas = $_POST['namaPetugas'];
    $username = $_POST['username'];
    $db->updateDataPetugas($id, $petugas, $username);
}

if(isset($_POST['submitBuku'])){
    $buku = $_POST['nama_buku'];
    $pengarang = $_POST['nama_pengarang'];
    $db->insertBuku($buku, $pengarang);

}

if(isset($_POST['submitPetugas'])){
    $petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $db->insertPetugas($petugas, $username);

}

if(isset($_GET['aksi'])){
   if($_GET['aksi'] == 'hapusAnggota'){
        $id=$_GET['id'];
        $db->hapusAnggota($id);
   } else if ($_GET['aksi'] == 'hapusBuku'){
        $id=$_GET['id'];
        $db->hapusBuku($id);
   } else if ($_GET['aksi'] == 'hapusPetugas'){
        $id=$_GET['id'];
        $db->hapusPetugas($id);
   } 

}

if(isset($_GET['aksi'])){
    if(isset($_GET['aksi']) == 'update'){

        $id=$_GET['id'];
    }
}

