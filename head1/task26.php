<?php
//Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей.
function maxSumDiv($n){
    $sum=0; 
    $maxsum=0;
    $num=0;
    for($j=0; $j<=$n; $j++){
        for($i=1; $i<$j; $i++){
            if($j%$i==0){
                $sum+=$i;
            }
        }
        if( $sum >$maxsum){
            $maxsum=$sum;
            $num=$j;
        }
        $sum=0;
    }
    return $num;
}

echo maxSumDiv(10);
?>