<?php
//Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.
function isSequence($n){
    $len=(int)log10($n)+1;
    $j=0;
    $m = $n;
    do{
        $p=($m%10);              
        $m = (int)($m/10);       
        $s = ($m%10);            
        if($p<$s)
        {
            return false;
        }
        $j++;
    }while($j<$len-1);
    return true;
}

isSequence(589);

?>