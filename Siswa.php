<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php

    class siswa{
        public $siswa;
        public $NIS;
        public $nama;
        public $Nilai;
        
//Method Siswa
        //method
        function set_siswa($tampungan_nama){
            $this->siswa = $tampungan_nama;
        }
        //fungsi mengambil isi variabel
        function get_siswa(){
            return $this->siswa;
        }




//Method NIS
        //method
        function set_NIS($tampungan_nama){
            $this->NIS = $tampungan_nama; 
        }
        //fungsi mengambil isi variabel
        function get_NIS(){
            return $this->NIS;
        }





//Method Nama
        //method
        function set_Nama($tampungan_nama){
            $this->Nama = $tampungan_nama; 
        }
        //fungsi mengambil isi variabel
        function get_Nama(){
            return $this->Nama;
        }





//Method Nilai
        function set_Nilai($tampungan_nama){
            $this->Nilai = $tampungan_nama; 
        }
        //fungsi mengambil isi variabel
        function get_Nilai(){
            return $this->Nilai;

        }


    }

//Objek
        //Memberi Nama Objek 1
        $siswa1 = new siswa();
        $siswa1->set_siswa("1");
        $siswa1->set_NIS("151610001");
        $siswa1->set_Nama("Albanna");
        $siswa1->set_Nilai("90");
        //Memanggil dan Menampilkan Objek 1
        echo "Siswa :" . $siswa1->get_siswa();
        echo "<br>";
        echo "NIS : " . $siswa1->get_NIS();
        echo "<br>";
        echo "Nama : " . $siswa1->get_Nama();
        echo "<br>";
        echo "Nilai : " . $siswa1->get_Nilai();


        echo "<br><br><br>";


        //Memberi Nama Objek 2
        $siswa2 = new siswa();
        $siswa2->set_siswa("2");
        $siswa2->set_NIS("15160002");
        $siswa2->set_Nama("Alif");
        $siswa2->set_Nilai("87.5");
        //Memanggil dan Menampilkan Objek 2
        echo "Siswa :" . $siswa2->get_siswa();
        echo "<br>";
        echo "NIS : " . $siswa2->get_NIS();
        echo "<br>";
        echo "Nama : " . $siswa2->get_Nama();
        echo "<br>";
        echo "Nilai : " . $siswa2->get_Nilai();


        echo "<br><br><br>";


        //memberi Nama Objek 3
        $siswa3 = new siswa();
        $siswa3->set_siswa("3");
        $siswa3->set_NIS("151610003");
        $siswa3->set_Nama("Ali");
        $siswa3->set_Nilai("80");
        //Memanggil dan Menampilkan Objek 3
        echo "Siswa :" . $siswa3->get_siswa();
        echo "<br>";
        echo "NIS : " . $siswa3->get_NIS();
        echo "<br>";
        echo "Nama : " . $siswa3->get_Nama();
        echo "<br>";
        echo "Nilai : " . $siswa3->get_Nilai();
 
 
 
    ?>

</body>
</html>