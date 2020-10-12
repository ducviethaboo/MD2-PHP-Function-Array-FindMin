<?php
function findMin()
{
    $arr = [3, 4, 1, 6, 7, 12, 3, 14];
    $min = $arr[0];
    $index = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}

echo findMin();