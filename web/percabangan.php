<?php

$nilai = -9;


if ($nilai > 100 || $nilai < 0){
    echo "Nilai tidak valid";
}else if($nilai >= 85 && $nilai <= 100) {
    echo "Anda mendapatkan nilai A";
} else if ($nilai >= 75) {
    echo "Anda mendapatkan nilai B";
} else if ($nilai >= 60  ) {
    echo "Anda mendapatkan nilai C";
} else if ($nilai >= 50  ) {
    echo "Anda mendapatkan nilai D";
} else if ($nilai >= 0 ) {
    echo "Anda mendapatkan nilai E";
} 

?>    

