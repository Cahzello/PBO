<?php

// for ($i = 1; $i > 0; $i++){
//  echo $i;
// }




echo "Deret Bilangan ganjil dari 0-100" . "<br>";

for ($i=0; $i<=100; $i++){
    if($i % 2 == 1){
        echo "$i " ;
    }
}

echo "<br>";

for ($i=100; $i >= 0; $i--){
    if ($i % 2 == 0){
        echo "$i ";
    }

}




