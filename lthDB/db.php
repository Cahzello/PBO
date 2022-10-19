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
            echo "Koneksi ke DB {$this->dbName} Berhasil";
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

}

$db = new database();
$db->connectMySQL();
$db->readAnggota();

