<?php
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];
$newArr = [];
$n = 3;
$chunk = array_chunk($arr,$n);
$i = 0;
for($i; $i<count($chunk); $i++)
{
    foreach($chunk as $item => $value)
    {
        array_push($newArr,$chunk[$item][$i]);
    
    }
}

print_r($newArr);
