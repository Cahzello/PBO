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
        $str = "Nama Anggota {$this->id} adalah {$this->nama}";
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
    public $id;
    public $tanggalPinjam;
    public $idBuku;
    public $tanggalPengembalian;
    public $idPetugas;

    public function insertData(){
        
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
echo $obj_anggota->readData();
echo "<br>";

$obj_anggota->insertData(1, 'Ayu Wahyuni');
echo $obj_anggota->readData();
echo '<br>';

$obj_anggota->updateData('Telon Mas');
echo $obj_anggota->readData();


?>