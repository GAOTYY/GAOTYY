<?php
 function demo($str)
{
   $len = strlen($str);
   $l=1;
   $k = intval($len/2)+1;
   for($j=0;$j<$k;$j++){
    if(substr($str,$j,1)!=substr($str,$len-$j-1,1)){
        $l=0;break;
    }
   }
   if($l==1){
    return "回文";
   }else{
    return "不是回文";
   }
}
$str= "abbac";
echo demo($str);