<?php
//Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.
function findSum($arr, $n)
{
    $result=array();
    for($i=0; $i<count($arr); $i++){
        $len=(int)log10($arr[$i])+1;
        if($len==4){
            $sum = 0;
            $j=0;
            $m = $arr[$i];
            do{
                $p=($m%10); 
                $m = (int)($m/10);
                $sum+=$p;
                $j++;
            }while($j<$len);
            if($sum == $n)
            {
                $result[]=$arr[$i];
            }
        }
    
        return $result;
    }

}
    $arr = [1222, 5556];
    var_dump(findSum($arr, 7));
?>

