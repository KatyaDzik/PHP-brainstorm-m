<?php
// Парными  простыми числами называются два простых числа, разность  которых равна двум. 
// Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел. 
function isSimple($n){
    for( $i=2; $i<$n; $i++){
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$count=0;
$result = array();
$i=2;
do{
    if(isSimple($i)){
        $j=$i+1;
        do{
            $j++;
        }while(!isSimple($j));
        if(($j-$i)==2){
            $result[]=[$i, $j];
            $count++;
        }
    }
    $i++;
}while($count!=5);
var_dump($result);


?>