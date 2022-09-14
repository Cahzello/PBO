<?php 

class anime {
    public $anime1;
    public $anime2;
    public $anime3;
    public $anime4;
    public $anime5;

    public function __construct($param_anime1, $param_anime2, $param_anime3, $param_anime4, $param_anime5 )
    {
        $this->anime1 = $param_anime1;
        $this->anime2 = $param_anime2;
        $this->anime3 = $param_anime3;
        $this->anime4 = $param_anime4;
        $this->anime5 = $param_anime5;
    }

    public function text (){
        echo "Ini adalah daftar dari anime anime terfavorit :" . "<br>";
    }

}

if ($_POST) {
    $anime1 = $_POST['anime1'];
    $anime2 = $_POST['anime2'];
    $anime3 = $_POST['anime3'];
    $anime4 = $_POST['anime4'];
    $anime5 = $_POST['anime5'];

    $favorit = new anime($anime1, $anime2, $anime3, $anime4, $anime5);

    $favorit->text();
    "<br>";
    "<br>";
    echo "Anime pertama: " . $favorit->anime1 . "<br>";
    echo "Anime ke-dua: " . $favorit->anime1 . "<br>";
    echo "Anime ke-tiga: " . $favorit->anime1 . "<br>";
    echo "Anime ke-empat: " . $favorit->anime1 . "<br>";
    echo "Anime ke-lima: " . $favorit->anime1 . "<br>";

}



?>