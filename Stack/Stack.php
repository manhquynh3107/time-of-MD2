<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
    function getStack(){
        return $this->stack;
    }

    function isEmpty()
    {
        if (!empty($this->stack)) {
            return true;
        } else {
            return false;
        }
    }

    function push($data)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $data);
        }
    }

    function pop()
    {
        if ($this->isEmpty()) {
            array_shift($this->stack);
        }
    }

    function top()
    {
        return current($this->stack);
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(0);
$stack->push(0);
$stack->push(2);
$stack->pop();
$stack->pop();
$stack->push(0);
$stack->push(2);
var_dump($stack->isEmpty());
echo "<br>";
$stack->pop();
$stack->pop();
var_dump($stack->isEmpty());

echo "<pre>";
print_r($stack->getStack());
echo "<pre/>";