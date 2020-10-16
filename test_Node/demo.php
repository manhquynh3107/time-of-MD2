<?php


class demo
{
    public $count = 0;
    public $firstNode = NULL;
    public $lastNode = NULL;
    function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        $this->count++;

        if ($this->lastNode === NULL) {
            $this->lastNode = $node;
        }
    }


    function addLast($data)
    {
        if ($this->firstNode === NULL) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = NULL;
            $this->lastNode = $node;
            $this->count++;
        }
    }
}