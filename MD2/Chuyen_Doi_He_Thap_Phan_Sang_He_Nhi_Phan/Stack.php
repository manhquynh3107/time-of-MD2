<?php

class Stack
{
    private  $stack;

    public function __construct()
    {
        $this->stack = array();
    }

    function binaryConverter($number)
    {
        return decbin($number);
    }

    function binaryConverter1($number)
    {
        $i = 0;

        while ($number > 0) {
            array_push($this->stack,($number % 2));
            $i++;
            $number = floor($number / 2);
        }
        return $this->stack;
    }
    function convert(){
        $listNew = implode('',array_reverse($this->stack));
        return $listNew;
    }
}

$stack = new Stack();
print_r($stack->binaryConverter(83));
echo "<br>";
print_r($stack->binaryConverter1(83));
echo "<br>";
print_r($stack->convert());