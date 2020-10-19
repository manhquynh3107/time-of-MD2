<?php
//
//function countNumber($numbers, $value)
//{
//    $count = 0;
//    for ($i = 0; $i < count($numbers); $i++) {
//        if ($numbers[$i] === $value){
//            $count++;
//        }
//    }
//    return $count;
//
//}
//
//echo countNumber([3,4,5,3,1,9,3],3);

function countNumber($numbers,$value){
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++){
        if ($numbers[$i] === $value){
            $count++;
        }
    }
    return $count;
}
echo countNumber([1,1,1,1,2,1,1,1,1,1,1,1,1,1],2);