<?php 

class buku {
    public $nama;
    public $jenis;
    public $tahunTerbit;

    function __construct($param_nama, $param_jenis, $param_tahunTerbit) {
        $this->nama = $param_nama;
        $this->jenis = $param_jenis;
        $this->tahunTerbit = $param_tahunTerbit;

    }
    
}

class Ebook extends buku {
    public $url;

    function __construct($param_nama, $param_jenis, $param_tahunTerbit, $param_url) {
        $this->nama = $param_nama;
        $this->jenis = $param_jenis;
        $this->tahunTerbit = $param_tahunTerbit;
        $this->url = $param_url;

    }

    public function deskripsi(){
        echo "Link E-Book {$this->nama} adalah {$this->url}.";
    }

}

$ebok1 = new Ebook("Manusia", "Fantasi", "24-05-2013", "https://www.youtube.com/watch?v=dQw4w9WgXcQ");

echo "nama: " . $ebok1->nama . "<br>";
echo "Genre: " . $ebok1->jenis . "<br>";
echo "Tahun Terbit: " . $ebok1->tahunTerbit . "<br>";
echo "Url: " . $ebok1->url . "<br>";
$ebok1->deskripsi();


?>