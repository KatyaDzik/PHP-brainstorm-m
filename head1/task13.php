<?php
//Определить, является ли число  2n  m  симметричным, т. е. 
//запись  числа содержит четное количество цифр и совпадают его левая и правая  половинки.  
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

function Simmetric($n){
    $len=(int)log10($n)+1;
    $div = 1;
    for($i=0; $i<$len/2;$i++){
        $div*=10;
    }
    if($len%2==0){ 
        if((int)($n/$div)==onBack($n%$div)){
            return true;
        }
        
    }
    return false;
}

Simmetric(1221);
?>