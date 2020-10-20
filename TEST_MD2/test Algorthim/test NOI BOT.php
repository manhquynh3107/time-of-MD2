<?php
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($arr);
for ($i = 0; $i < count($arr);$i++){
    for ($j = 0 ; $j < $count-$i-1;$j++){
        if ($arr[$j] < $arr[$j+1]){
            $temp = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
for ($i = 0; $i < $count;$i++){
    echo "<pre>";
    echo $arr[$i]."";
}