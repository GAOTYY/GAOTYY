<?php


 function demo($n)
{
    $sum=1;
    for($i=1;$i<=$n;$i++){
        $sum=$n*demo($n-$i);
    }
    return $sum;
}
 function demo2($a)
{
   if($a>1){
    $r= $a*demo2($a-1);
   }else{
    $r=$a;
   }
   return $r;
}


echo demo2(6);