<?php


function sum()
{
    $sum = 0;
    for($i=1;$i<=100;$i++){
        $sum +=$i;
    }
    return $sum;
}
 function sum2()
{
    $sum = 0;
    $i=1;
    while ( $i<= 100) {
        $sum+=$i;
        $i++;
    }
    return $sum;
}
 function sum3()
{
    $sum = 0;
    $i=1;
     do{
        $sum+=$i;
        $i++;
     }while($i<=100);

     return $sum;
}
echo sum();
echo "<br>";
echo sum2();
echo "<br>";
echo sum3();