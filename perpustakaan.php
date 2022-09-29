<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <form action="perpustakaan.php" method="get">
        <h2>Data Anggota</h2>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="inputId"></td>
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="inputNama"></td>
            </tr>
        </table>
        <h2>Data Peminjaman</h2>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="inputId1"></td>
            </tr>
            <tr>
                <td>Tanggal Pinjam:</td>
                <td><input type="date" name="tglPinjam"></td>
            </tr>
            <tr>
                <td>ID Buku:</td>
                <td><input type="text" name="idBuku"></td>
            </tr>
            <tr>
                <td>Tanggal Pengembalian:</td>
                <td><input type="date" name="tglPengembalian"></td>
            </tr>
            <tr>
                <td>ID Petugas:</td>
                <td><input type="text" name="idPetugas"></td>
            </tr>
        </table>
        <input type="submit" name="btnSubmit">
    </form>
    <br>
</body>
</html>

<?php 

class Buku {
    public $idBuku;
    public $judulBuku;
    public $pengarang;

    public function insertData(){
        
    }

    public function updateData(){

    }
}

class Anggota {
    public $id;
    public $nama;

    public function readData(){
        $str = "Nama Anggota {$this->id} adalah {$this->nama} <br>";
        return $str; 
    }

    public function insertData($param_id, $param_nama){
        $this->id = $param_id;
        $this->nama = $param_nama;
    }

    public function updateData($param_nama){
        $this->nama = $param_nama;
    }
}

class PinjamBuku {
    public $id1;
    public $tanggalPinjam;
    public $idBuku;
    public $tanggalPengembalian;
    public $idPetugas;

    public function readData(){
        $tsr = "ID = {$this->id1} <br> 
        Tanggal Pinjaman = {$this->tglPinjam} <br>
        ID Buku = {$this->idBuku} <br>
        Tanggal Peminjama = {$this->tglPengembalian} <br>
        ID Petugas = {$this->idPetugas}

        
        ";
        
        return $tsr;
    }

    public function insertData($param_id, $param_tglPinjam, $param_idBuku, $param_tglPengembalian, $param_idPetugas){
        $this-> id1 = $param_id;
        $this-> tglPinjam = $param_tglPinjam;
        $this-> idBuku = $param_idBuku;
        $this-> tglPengembalian = $param_tglPengembalian;
        $this-> idPetugas = $param_idPetugas;
    }

    public function updateData(){

    }

    public function pilihBuku(){

    }
}

class PetugasPerpustakaan {
    public $idPetugas;
    public $nama;

    public function insertData(){
        
    }

    public function updateData(){
        
    }
}

class BukuAsing extends Buku {
    
    public function insertData(){
        
    }

    public function updateData(){
        
    }
}

class BukuLokal extends Buku {
  
    public function insertData(){
        
    }

    public function updateData(){
        
    }
}

$obj_anggota = new Anggota();
$obj_PinjamBuku = new PinjamBuku();
// echo $obj_anggota->readData();
// echo "<br>";

// $obj_anggota->insertData(1, 'Ayu Wahyuni');
// echo $obj_anggota->readData();
// echo '<br>';

// $obj_anggota->updateData('Telon Mas');
// echo $obj_anggota->readData();

if($_GET){
    $id = $_GET['inputId'];
    $id1 = $_GET['inputId1'];
    $nama = $_GET['inputNama'];
    $tglPinjam = $_GET['tglPinjam'];
    $idBuku = $_GET['idBuku'];
    $tglPengembalian = $_GET['tglPengembalian'];
    $idPetugas = $_GET['idPetugas'];


    $obj_anggota->insertData($id, $nama);
    echo $obj_anggota->readData();
    echo "<br>";

    $obj_PinjamBuku->insertData($id1, $tglPinjam,$idBuku, $tglPengembalian, $idPetugas );
    echo $obj_PinjamBuku->readData();
    echo "<br>";

}

?>