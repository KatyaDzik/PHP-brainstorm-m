<?php
//Натуральное число называют совершенным, если оно равно сумме  
//всех своих делителей, не считая его самого. Например, 6=1+2+3.  Найти  все совершенные числа в диапазоне от N до M.  

function IsSovershennoe($n){
    $a = $n-1;
    $sum=0;
    do {
        if ($n % $a == 0){
            $sum += $a;
        }
        $a -= 1;
    }while($a>0);
    if($sum==$n){
        return true;
    }
    return false;
}

function findAllSovershen($arr)
{
    $result=[];
    for($i=0; $i<count($arr); $i++){
        if(IsSovershennoe($arr[$i])){
            array_push($result, $arr[$i]);
        }
    }
    return $result;
}

$arr=[6, 5, 12];
var_dump(findAllSovershen($arr));


?>