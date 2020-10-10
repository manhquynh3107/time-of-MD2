<?php

include_once ("Circle.php");
class Cylinder extends Circle {
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}
$cylinder = new Cylinder('Cylinder 2020',10,10);
echo 'Cylinder Area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder Perimeter: ' . $cylinder->calculatePerimeter() . '<br />';