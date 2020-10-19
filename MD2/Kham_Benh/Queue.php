<?php
include_once "Patient.php";

class Queue
{
    private $listData;

    public function __construct()
    {
        $this->listData = array();
    }

    function addPatient($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->listData, $patient);
    }

    function sort()
    {
        function my_sort($a, $b)
        {
            if ($a->code == $b->code) return 1;
            return ($a->code > $b->code) ? 1 : -1;
        }

        usort($this->listData, "my_sort");

    }

    function dequeue()
    {
        $current = array();

        $result = array_shift($this->listData);

        array_push($current, $result);

        return $current;
    }


    function toString()
    {
        return $this->listData;
    }


}

$queue = new Queue();
$queue->addPatient("A", 5);
$queue->addPatient("B", 4);
$queue->addPatient("C", 6);
$queue->addPatient("D", 1);
$queue->addPatient("E", 1);
$queue->sort();
print_r($queue->dequeue());

echo "<pre>";
print_r($queue->toString());
echo "</pre>";