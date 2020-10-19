<?php
function countNumber($numbers,$value){
    $count = 0;
    for ($i = 0 ; $i < count($numbers) ; $i++){
        if ($numbers[$i] === $value){
            $count++;
        }
    }
    return $count;
}
echo countNumber([3,0,0,7,1,0,0,2],0);

