<?php
//Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.
function countLessFive($n)
{
    $count=0;
    $len=(int)log10($n)+1;
    $j=0;
    $m = $n;
    do{
        $p=($m%10);              
        $m = (int)($m/10);      
        if($p<5){
            $count++;
        }
        $j++;
    }while($j<$len-1);
    return $count;

 
}
   echo countLessFive(125553);
?>
