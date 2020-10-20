<?php
//Sap Xep Chon Tang Dan
function selectionUpSort($arr){
    for ($i = 0; $i < count($arr)-1; $i++){
        $min = $i;
        for ($j = $i + 1;$j < count($arr);$j++){
            if ($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        $arr = swap_positions ($arr,$i,$min);
    }
    return $arr;
}

function swap_positions($arr1,$left,$right){
    $temp = $arr1[$right];
$arr1[$right] = $arr1[$left];
$arr1[$left] = $temp;
return $arr1;
}

echo "<pre>";
print_r(selectionUpSort([1.1, 9.9, 8.8, 6.6, 5.5, -4.4]));

// Sap Xep Chon Giam Dan
function selectionDownSort($arr){
    for ($i = 0; $i < count($arr);$i++){
        $min = $i;
        for ($j = $i + 1; $j < count($arr);$j++){
            if ($arr[$j] > $arr[$min]){
                $min = $j;
            }
        }
        $arr = swap_position($arr,$i,$min);
    }
    return $arr;
}
function swap_position($arr1,$left,$right){
    $temp = $arr1[$right];
    $arr1[$right] = $arr1[$left];
    $arr1[$left] = $temp;
    return $arr1;
}
echo "<pre>";
print_r(selectionDownSort([1.1, 9.9, 8.8, 6.6, 5.5, -4.4]));