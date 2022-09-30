<?php
//Среди      заданной      последовательности      натуральных      чисел    n0 ,n1,...,nm
// найти  сумму  и  количество  тех  чисел,  которые  равны  сумме  факториалов своих цифр.
function factorial($number){ 
    if($number <= 1){   
        return 1;   
    }   
    else{   
        return $number * factorial($number - 1);   
    }   
} 

$n=5;
$ressum=0;
$count=0;
for($i=0; $i<$n; $i++){
    $len=(int)log10($i)+1;
    $j=0;
    $sum=0;
    $s=$i;
    do{
        $p=($s%10);    
        $s = (int)($i/10);   
        $sum+=factorial($p);
        $j++;          
    }while($j<$len);
    echo $sum."\n";
    if($sum==$i){
        $ressum+= $i;
        $count++;
    }
}


?>