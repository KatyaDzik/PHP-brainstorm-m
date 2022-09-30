<?php
//Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей.
function isSimple($n){
    for( $i=2; $i<$n; $i++){
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function maxSumSimpleDiv($n){
    $sum=0; 
    $maxsum=0;
    $num=0;
    for($j=0; $j<=$n; $j++){
        for($i=1; $i<$j; $i++){
            if($j%$i==0){
                if(isSimple($i)){
                    $sum+=$i;
                }
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

echo maxSumSimpleDiv(10);

?>