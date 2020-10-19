<?php


class Queue
{
    public function __construct()
    {
    }
    function checkArray($arr1){
        $arr = str_split($arr1);
        for ($i=0;$i<count($arr)/2;$i++){
            if ($arr[$i] !== $arr[count($arr)-1-$i]){
                return false;
            }
        }
        return true;
    }
}

$queue = new Queue();
var_dump($queue->checkArray("able was I ere I saw elba"));