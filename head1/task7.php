<?php
//Выяснить, есть ли в записи натурального числа N две одинаковые цифры.
function twoSameDigit($n){
    $len=(int)log10($n)+1;
    $j=0;
    $m = $n;
    $s = (int)($m/10);  
    do{
        $p=($m%10);              
        $m = (int)($m/10); 
        $x = $m; 
        $len1=(int)log10($m)+1;
        for($i=0; $i<$len1; $i++){
            $y=($x%10);                            
            $x = (int)($x/10);
            if($y==$p)
            {
                return true;
            }
        }
        $j++;
    }while($j<$len-1);

    return false;
}

twoSameDigit(1552);

?>