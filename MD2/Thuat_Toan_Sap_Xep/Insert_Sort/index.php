<?php
//Sap Xep IN SEC Tang Dan
function insertUpSort($arr){
    for($i=0;$i<count($arr);$i++){
        $value = $arr[$i];
        $j = $i-1;
        while($j>=0 && $arr[$j] > $value){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $value;
    }
    return $arr;
}
echo "<pre>";
print_r(insertUpSort([5, -4, 3, 7, 2, 1, 0, 8, 9, 2]));


//Sap Xep IN SEC giam dan
function insertDownSort($arr){
    for ($i = 0; $i < count($arr);$i++){
        $value = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] < $value){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}
echo "<pre>";
print_r(insertDownSort([5, -4, 3, 7, 2, 1, 0, 8, 9, 2]));