<?php
//Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.
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

function notSameDigit($arr){
    $result=[];
    for($i=0; $i<count($arr); $i++){
        $len=(int)log10($arr[$i])+1;
        if($len==4){
            if(!twoSameDigit($arr[$i])){
                array_push($result, $arr[$i]);
            }
        }
    }
    return $result;
}

$arr=[1552, 4238, 7785];
var_dump(notSameDigit($arr));
?>