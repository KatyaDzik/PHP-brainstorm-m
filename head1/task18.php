<?php
//Два  натуральных  числа  называют  дружественными,
//если  каждое  из них равно сумме всех делителей другого. Найти все пары дружественных чисел, лежащих в диапазоне от N до M.
 

function sumDiv($n)
{
    $a = $n-1;
    $sum = 0;
    do {
        if ($n % $a == 0){
            $sum += $a;
        }
        $a -= 1;
    }while($a>0);
    return $sum;
}

function findAllDruzh($n, $m)
{
    $result=[];
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$m; $j++){
        if($i==sumDiv($j) && $j==sumDiv($i)){
            array_push($result, $i);
            array_push($result, $j);
        }
        }
    }   
    return $result;
}


var_dump(findAllDruzh(300, 300));

?>