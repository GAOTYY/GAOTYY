<?php

//三个阶段
//git add    上车
//git status 查看状态
//git commit -m "" 进库并且加入注释
//git push   入库
//
//
//
$arr = array(1,5,9,3,7,6,4,2,8,0);

function go($arr)
{
// //从大到小排序
    $len = count($arr); // 计算长度
    for($i=0;$i<$len-1;$i++){
        for($j=0;$j<$len-$i-1;$j++){
            if($arr[$j]<$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
print_r(go($arr));

