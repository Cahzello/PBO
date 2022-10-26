<?php

function sum($x, $y){
    $z = $x + $y;
    return $z;
}

function devide($x, $y){
    $z = $x / $y;
    return $z;
}

echo "= " . sum(5, 10) . "\n";
echo "= " . sum(3, 3) . "\n";
echo "2 + 4 = " . sum(2, 4) . "\n";

echo "10 / 2 = " . devide(10, 2) . "\n";

