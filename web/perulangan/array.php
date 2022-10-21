<?php

$siswa  = array(
    "Nama" => "raisya",
    "Email" => "raisya@gmail.com",
    "Usia" => 16,
    "Gender" => "Perempuan",
);

foreach ($siswa as $key => $element){
    echo $key . ":" . $element;
    echo "<br>" . "\n";
}