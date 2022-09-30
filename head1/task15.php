<?php
//Определить количество различных делителей целого числа N.  
function colDiv($n)
{
    $a = $n;
    $count = 0;
    do {
        if ($n % $a == 0){
            $count += 1;
        }
        $a -= 1;
    }while($a>0);
    return $count;
}

echo colDiv(6);

?>