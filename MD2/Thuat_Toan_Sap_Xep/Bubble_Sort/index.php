<?php
// Sap Xep Tang Dan
function bubbleUpSort($arr){
    $count = count($arr);
    for ($i = 0; $i < $count; $i++){
        for ($j = 0 ;$j < $count-$i-1; $j++){
            if ( $arr[$j] > $arr[$j+1] ){
                $temp = $arr[ $j + 1 ];
                $arr[ $j + 1 ] = $arr[ $j ];
                $arr[ $j ] = $temp;
            }
        }
    }
    return $arr;
}
echo "<pre>";
print_r(bubbleUpSort( [2, 3, 2, 5, 6, 1, -2, 3, 14, 12]));
// Sap Xep Giam Dan
function bubbleDownSort($arr){
    $count = count($arr);
    for ($i = 0; $i < $count ; $i++){
        for ($j = 0; $j < $count-$i-1; $j++){
            if ($arr[$j] < $arr[$j + 1]){
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}
echo "<pre>";
print_r(bubbleDownSort([2, 3, 2, 5, 6, 1, -2, 3, 14, 12]));