<?php
// Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. 
// Число называется палиндромом, если его запись читается одинаково с начала и с конца.
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
  onBack(12345);


$n=177;

for ($i=10; $i < $n; $i++) {
    if ($i==onBack($i))
    {
        echo $i. " is a Palindrom!<br>";
    } 
}



?>

