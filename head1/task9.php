<?php
//Дано  натуральное  число  N.  Определить,  является  ли  оно  автоморфным.
// Автоморфное число  равно последним разрядам квадрата этого числа. Например,  5 и 25,  6 и 36,  25 и 625.
function isAutomorfnoe($n){
    $d=1;
    while($d < $n)
        $d *= 10;
    if($n == 1 || $n*$n % $d == $n)
        return true;
    else
        return false;
}

isAutomorfnoe(6);
?>