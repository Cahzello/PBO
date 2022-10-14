<?php

$hari ='sabtu';

if ($hari == 'senin'){
    echo 'Hari ini hari' . $hari . ', semoga kembali fresh' . "\n";
} else if ($hari == 'kamis'){
    echo 'hari ini ' . $hari . ', semoga masih semangat' . "\n";
} else if ($hari == 'sabtu'){
    echo 'hari ini ' . $hari . ', selamat menjalani weekend' . "\n";
} else {
    echo 'hari ini ' . $hari . ', tetap semangat' . "\n";
}

switch ($hari){
    case 'senin':
    echo 'Hari ini hari ' . $hari . ', semoga kembali fresh' . "\n";
    break;
    
    case 'kamis':
    echo 'Hari ini hari ' . $hari . ', semoga masih semangat' . "\n";
    break;
    
    case 'sabtu':
    echo 'Hari ini hari ' . $hari . ', selamat menjalani weekend' . "\n";
    break;

    default:
    echo 'hari ini ' . $hari .  ', tetap semangat' . "\n";
}







