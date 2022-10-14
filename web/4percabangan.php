<?php

echo '<h1>Contoh Impelementasi Nested If Statement Pada PHP</h1>';
echo '<h2>Mencari Angka terkecil Dari 4 Angka: [angkaA, angkaB, angkaC, angka,D] </h2>';

$a = 17;
$b = 77;
$c = 1;
$d = 1;

if ($a < $b){
    if($a < $c){
        if($a < $d){
            echo '<h1>' . $a . ' Angka terkecil!</h1>';
        } else {
            echo '<h2>' . $d . ' Angka terkecil!</h2>';
        }
    } else {
        if ($c < $d){
            echo '<h2>' . $c . ' Angka terkecil!</h2>';
        } else {
            echo '<h2>' . $d . ' variabel C dan D sama!</h2>';
        }
    }
} else {
    if ($b < $c){
        if($b < $d){
            echo '<h2>' . $b . ' Angka terkecil!</h2>';
        } else {
            echo '<h2>' . $d . ' Angka terkecil!</h2>';
        }
    } else {
        if($c < $d){
            echo '<h2>' . $c . ' Angka terkecil!</h2>';
        } else {
            echo '<h2>' . $d . ' Angka terkecil!</h2>';
        }
    }
}



