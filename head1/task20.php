<?php
//Найти целое число в диапазоне от N до M с наибольшей суммой  делителей.
function sum($n){
    $a = $n;
    $sum=0;
    do {
        if ($n % $a == 0){
            $sum += $a;
        }
        $a -= 1;
    }while($a>0);

    return $sum;
}

function maxSum($n, $m)
{
    $max=0;
    $c=0;
    for($i=$n; $i<=$m; $i++)
    {
       if($max<sum($i)){
        $max=sum($i);

        $c=$i;
        
       }

    }
    return $c;
}

echo maxSum(2, 12);


?>