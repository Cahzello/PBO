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
        $tskr = "
        ID = {$this->id1} <br> 
        Tanggal Pinjaman = {$this->tglPinjam} <br>
        ID Buku = {$this->idBuku} <br>
        Tanggal Peminjama = {$this->tglPengembalian} <br>
        ID Petugas = {$this->idPetugas}

        
        ";
        
        return $tskr;
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


?>