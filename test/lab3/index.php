<?php

    $arr = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
    $minArr = [];
    $draff = [];
    sort($arr);

    for($i =0; $i<count($arr); $i++)
    {
        for($j = 0; $j<count($arr); $j++)
       
        {
            if($arr[$i] > $arr[$j])
            {
               array_push($draff, ($arr[$i] - $arr[$j]));
            }

            if($arr[$i] < $arr[$j])
            {
                array_push($draff, ($arr[$j] - $arr[$i]));
             }

            
        }
       
       

    }

    $dis = min($draff);
    distance($arr, $dis);

    function distance($arr, $dis)
    {
        $arrDis = [];
        for($i = 0; $i < count($arr) ; $i++)
        {
            if ($key = array_search($arr[$i] + $dis, $arr,true)) 
            {
                array_push($arrDis, [$arr[$key], $arr[$i]]);
            }
           
        }
        
        print_r($arrDis);

    }
    

   
   

    
?>