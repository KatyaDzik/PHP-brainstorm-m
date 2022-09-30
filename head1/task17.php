<?php
//Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.   

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
 
echo nod(16, 64);
?>