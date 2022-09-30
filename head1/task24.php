<?php
//Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в шестнадцатеричной системе счисления.  
function tenToTwo($n)
{
    $b = "";
    while ($n != 0) {
        $b = ($n % 2) . $b;
        $n = (int) floor($n / 2);
    }
    echo $b;
}

function tenToHex($n){
    $sign = ""; // suppress errors 
    if( $n < 0){ $sign = "-"; $n = abs($n); }

    $hex = Array( 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 
                  6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 'a', 
                  11 => 'b', 12 => 'c', 13 => 'd', 14 => 'e',    
                  15 => 'f' );
    do 
    { 
        $h = $hex[($n%16)] . $h; 
        $n /= 16; 
    } 
    while( $n >= 1 );

    echo $sign . $h; 

}

tenToTwo(56);
tenToHex(85);
?>