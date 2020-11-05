<?php
$arr = [0, 100, -4, 8, 143, 5, 99, 100];
$n = 2;
$max = null;
$newArr = [];
$position = 0;
for ($i = 0; $i < count($arr); $i++)
{
    $slice = array_slice($arr, $i+ $position, $n);
    $sum = array_sum($slice);
    array_push($newArr, $sum);
    $position++;
}

return print_r(max($newArr));

?>