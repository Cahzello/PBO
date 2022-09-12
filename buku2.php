<?php



class buku {
    public $nama;
    public $genre;
    public $tahunTerbit;

    public function __construct($param_nama, $param_genre, $param_tahunTerbit)
    {
        $this->nama = $param_nama;
        $this->genre = $param_genre;
        $this->tahunTerbit = $param_tahunTerbit;
    }

}

if ($_POST) {

    $inputNama = $_POST['inputNama'];
    $inputJenis = $_POST['inputJenis'];
    $inputTahunTerbit = $_POST['inputTahunTerbit'];

    $buku1 = new buku($inputNama, $inputJenis, $inputTahunTerbit);

    echo "Data Buku" . "<br>";
    echo "Nama: " . $buku1->nama . "<br>";
    echo "Jenis: " . $buku1->genre . "<br>";
    echo "Tahun Terbit: " . $buku1->tahunTerbit . "<br>";

}

?>