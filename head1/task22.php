<?php
//Натуральное число N разложить на простые множители. 

function simpleMulti($n){
    $rasl = array();
    for ($i=2; $i<=$n; $i++) {
        if (($n % $i) == 0) {
            $rasl[] = $i;
            $n /= $i;
            $i--;
            if ($n<2) break;
        }
    }
    return $rasl;
}

var_dump(simpleMulti(16));
?>