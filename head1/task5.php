<?php
//По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

function onBack($n){
    $result='';
    $len=(int)log10($n)+1;
    $j=0;
    do{
        $p=($n%10);    
        $n = (int)($n/10);   
        $result=$result.(string)$p;
        $j++;          
    }while($j<$len);
    return (int)$result;
}

  onBack(12345);
?>