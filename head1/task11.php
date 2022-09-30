<?php
//Напечатать   те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.
function divSum($arr){
    $result=[];
    for($i = 0; $i<count($arr); $i++){
        $len=(int)log10($arr[$i])+1;
        $m = $arr[$i];
        $sum=0;
        $j=0;
        do{
            $p=($m%10);              
            $m = (int)($m/10);       
            $sum+=$p;
            $j++;
        }while($j<$len);

        if($arr[$i]%$sum==0){
            array_push($result, $arr[$i]);
        };
    }
    return $result;
}

$arr=[2337,20,5461];
var_dump(divSum($arr));
?>