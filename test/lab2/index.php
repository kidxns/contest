<?php
$arr = [0, 100, -4, 8, 143, 5, 99, 100];
$maxArr = [];
$n = 2;

for($i = 0; $i < $n; $i++)
{
    $max = max($arr);
    array_push($maxArr, $max);

    if ($key = array_search($max, $arr,true)) 
    {
        unset($arr[$key]);
    }
}

    print_r(array_sum($maxArr));
?>