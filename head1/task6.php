<?php
//Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
function meetDigit($arr){
    $result=array();
    for($i = 0; $i<count($arr); $i++){
        $len=(int)log10($arr[$i])+1;
        if($len==4){
            $j=0;
            $n = $arr[$i];
            $check=true;
            do{
                $p=($n%10);    
                $n = (int)($n/10);   
                if($p!=0 && $p!=2 && $p!=3 && $p!=7)
                {
                    $check=false;
                   break;
                }
                $j++;          
            }while($j<$len);
            if($check){
                $result[] = $arr[$i]; 
            }
        }
    }
    return $result;
}

$arr=[2337,44521,5461];
var_dump(meetDigit($arr));
?>