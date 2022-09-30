<?php
//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
function isSequenceAsc($n){
    $j=0;
    $m = $n;
    do{
        $p=($m%10);              
        $m = (int)($m/10);       
        $s = ($m%10);            
        if($p<$s || $p%2!=0)
        {
            return false;
        }
        $j++;
    }while($j<4);
    return true;
}

function isSequenceDesc($n){
    $len=(int)log10($n)+1;
    $j=0;
    $m = $n;
    do{
        $p=($m%10);              
        $m = (int)($m/10);       
        $s = ($m%10);            
        if($p>$s || $p%2!=0)
        {
            return false;
        }
        $j++;
    }while($j<$len-1);
    return true;
}

function funmain($arr){
    $result=[];
    for($i = 0; $i<count($arr); $i++){
        $len=(int)log10($arr[$i])+1;
        echo 'je';
        if($len==4){
            if(isSequenceAsc($arr[$i]) || isSequenceDesc($arr[$i])){
                array_push($result, $arr[$i] );
            }
        }
    }
    return $result;
}

$arr=[2555, 2468, 8642];
var_dump(funmain($arr));


?>