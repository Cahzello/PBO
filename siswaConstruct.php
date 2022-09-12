<?php

use siswa as GlobalSiswa;

class siswa {
    public $nis;
    public $nama;

    //construct : menginialisasi Properti
    function __construct ($param_nis, $param_nama) {
        $this->nis = $param_nis;
        $this->nama = $param_nama;

    }

}


//inheritance class 
class osis extends Siswa {
    public $jabatan;

    function __construct ($param_nis, $param_nama, $param_jabatan) {
        $this->nis = $param_nis;
        $this->nama = $param_nama;
        $this->jabatan = $param_jabatan;

    }
    
    public function intro(){
        echo "Hello, saya {$this->na ma} adalah anggota OSIS";
    }
}
    


$osis1 = new osis(177013, "Marina", "Ketua Osis");

echo $osis1->nis . "<br>";
echo $osis1->nama . "<br>";
echo $osis1->jabatan. "<br>";
$osis1->intro();

?>