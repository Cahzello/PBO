<?php 

if($_GET){
    $nama=$_GET['nama'];
    $no=$_GET['no'];
    $alamat=$_GET['alamat'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Form</title>
</head>
<body>
    <h1>Penitipan Hewan</h1>
    <table>
        <tr>
            <td>Nama Hewan</td>
            <td>: <input type="text" name="namaHewan"></td>
        </tr>
        <tr>
            <td>Jenis Hewan</td>
            <td>: <select name="jh" id="">
                <option value="kucing">Kucing</option>
                <option value="anjing">Ular</option>
                <option value="burung">Burung</option>
                <option value="hamster">Hamster</option>
                <option value="ikan">Ikan</option>
            </select></td>
        </tr>
        <tr>
            <td>Ciri-ciri</td>
            <td>: <input type="text" name="cirinya"></td>
        </tr>
        <tr>
            <td>Berat</td>
            <td>: <input type="text" name="berat"></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td>: <input type="text" name="usia"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;<input type="submit" name="simpan" value="simpan"></td>
        </tr>
    </table>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    class Hewan {
        public $namaHewan;
        public $jenis;
        public $khusus;
        public $berat;
        public $usia;

        public function identitas(){
            echo "Nama" . $this->jenis . " : " . $this->namaHewan . "<br>";
            echo "Berat" . $this->jenis . " : " . $this->berat . "<br>";
            echo "Usia" . $this->jenis . " : " . $this->usia . "<br>";
            echo "Ciri-ciri :<br>";
            echo "-Ciri-ciri umum hewan yang bisa dititipkan adalah hewan yang tidak beruara <br>";
            echo "-Ciri-ciri umum " . $this->jenis . "yaitu ";
        }

    }

    interface ciri{
        public function cirikhusus();
    }

    class Kucing extends Hewan implements ciri {
        
        public function jalan(){
            echo "Berjalan";
        }
        public function cirikhusus(){
            return "-Ciri-ciri khusus " . $this->jenis . "yaitu " . $this-> khusus;
        }
    }

    class Ular extends Hewan implements ciri {

        public function bisa(){
            echo "Berbisa";
        }
        public function cirikhusus(){
            return "-Ciri-ciri Khusus " . $this->jenis . "yaitu " . $this->khusus;
        }
    }
    
    class Burung extends Hewan implements ciri {
        
        public function terbang(){
            echo "Terbang";
        }
        public function cirikhusus(){
            return "-Ciri-ciri Khusus " . $this->jenis . "yaitu " . $this->khusus ;
        }
        
    }

    class Hamster extends Hewan implements ciri {
        
        public function kecil(){
            echo "kecil";
        }
        public function cirikhusus(){
            return "-Ciri-ciri Khusus " . $this->jenis . "yaitu " . $this->khusus ;
        }
        
    }

    class Ikan extends Hewan implements ciri {

        public function berenang(){
            echo "Berenang";
        }
        public function cirikhusus(){
            return "-Ciri-ciri Khusus " . $this->jenis . "yaitu " . $this->khusus ;
        }

    }

    $sihewan = new hewan;
    $sihewan ->namaHewan = $_POST['namaHewan'];
    $sihewan ->berat = $_POST['berat'];
    $sihewan ->usia = $_POST['usia'];
    $sihewan ->khusus = $_POST['cirinya'];
    $sihewan ->jenis = $_POST['jh'];

    echo $sihewan->identitas();

    $sikucing = new Kucing;
    $sikucing->jenis = $_POST['jh'];
    $sikucing->khusus = $_POST['cirinya'];

    $siular = new Ular;
    $siular->jenis = $_POST['jh'];
    $siular->khusus = $_POST['cirinya'];

    $siburung = new Burung;
    $siburung->jenis = $_POST['jh']; 
    $siburung->khusus = $_POST['cirinya']; 

    $sihamster = new Hamster;
    $sihamster->jenis = $_POST['jh'];
    $sihamster->khusus = $_POST['cirinya'];

    $siikan = new Ikan;
    $siikan->jenis = $_POST['jh'];
    $siikan->khusus = $_POST['cirinya'];

    if($jenis == "kucing") { 
        $sikucing->jalan();
        echo $sikucing->cirikhusus();
    } else if ($jenis == "ular") {
        $siular->bisa();
        echo $siular->cirikhusus();
    } else if ($jenis == "burung") {
        $siburung->terbang();
        echo $siburung->cirikhusus();
    } else if ($jenis == "hamster"){
        $sihamster->kecil();
        echo $sihamster->cirikhusus();
    } else if ($jenis == "ikan") {
        $siikan->berenang();
        echo  $siikan->cirikhusus();
    }

    echo "<br><br><a href=\"titipkan.php\"></a>";
    
}


?>