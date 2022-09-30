<?php
//Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.  

function nok($c, $d)
{
    if ($c<$d) 
     {
         $a=$c ;
         $b=$d; 
     }
    else
     {
        $a=$d ;
         $b=$c;  
     }
  
    for ($i=$b ; $i<=$a*$b  ; $i++)
    {
        if ( $i %  $a  == 0 and   $i %   $b   == 0 )
        {
            return $i;
            break ;
        }
    }
       
}

nok(2, 6);
?>