<?php
// Даны  натуральные  числа  N  и  M.  Определить,  являются  ли  они  взаимно простыми числами. 
// Взаимно простые числа не имеют общих делителей, кроме единицы.

function nod($n, $m) {
    while(true) {
        if($n == $m) {
            return $m;
        }
        if($n > $m) {
            $n -= $m;
        } else {
            $m -= $n;
        }
    }
}

function bothSimple($n,$m){
    if(nod($n, $m)==1){
        return true;
    }
    else
        return false;
}

echo bothSimple(8,9);
?>