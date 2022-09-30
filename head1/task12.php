<?php
//Определить, является ли заданное целое число N простым.

function isSimple($n){
    for( $i=2; $i<$n; $i++){
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

isSimple(5);

?>