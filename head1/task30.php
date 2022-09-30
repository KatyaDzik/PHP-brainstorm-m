<?php

//Найти среди натуральных чисел n, n+1,...,2n1 числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.  
function isSimple($n){
    for( $i=2; $i<$n; $i++){
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


$result = array();
$n=18;
for($i=2; $i<$n; $i++){
    if(isSimple($i)){
        $j=$i+1;
        do{
            $j++;
        }while(!isSimple($j));
        if(($j-$i)==2){
            $result[]=[$i, $j];
        }
        
    }
}
var_dump($result);
?>