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

    public function insertData(){
        
    }

    public function updateData(){

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
    public $idBuku;
    public $judulBuku;
    public $pengarang;

    public function insertData(){
        
    }

    public function updateData(){
        
    }
}

class BukuLokal extends Buku {
    public $idBuku;
    public $judulBuku;
    public $pengarang;

    public function insertData(){
        
    }

    public function updateData(){
        
    }
}

?>