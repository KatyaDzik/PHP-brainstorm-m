<?php
// Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm 
//так, чтобы цифры каждого числа образовывали максимально возможные числа.   
function orderDesc($n)
{
    $result=array();
    $str='';
    $len=(int)log10($n)+1;
    $j=0;
    do{
        $p=($n%10);    
        $n = (int)($n/10);   
        $result[]=$p;
        $j++;          
    }while($j<$len);

    for ($i=0; $i < count($result); $i++)
	{
		for ($y=($i+1); $y < count($result); $y++)
		{
			if ($result[$i] < $result[$y])
			{
				$c = $result[$i];
				$result[$i] = $result[$y];
				$result[$y] = $c;
			}
		}
	}
    for ($x = 0; $x < count($result); $x++){
        $str=$str.(string)$result[$x];
     }

    return (int)$str;
}

$n=123;
for($i=0; $i<$n; $i++){
    echo orderDesc($i)." ";
}
?>