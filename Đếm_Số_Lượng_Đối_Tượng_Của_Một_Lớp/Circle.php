<?php

include_once ("Shape.php");

//class Circle extends Shape {
//    public $radius;
//
//    public function __construct($name, $radius)
//    {
//        parent::__construct($name);
//        $this->radius = $radius;
//    }
//
//    public function calculateArea(){
//        return pi() * pow($this->radius, 2);
//    }
//
//    public function calculatePerimeter(){
//        return pi() * $this->radius * 2;
//    }
//}
//
//$circle = new Circle('Circle1', 4);
//echo "Circle Area :".$circle->calculateArea()."<br/>";
//echo "Circle Perimeter :".$circle->calculatePerimeter()."<br/>";
//

class Circle extends Shape {
    public $radius ;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius= $radius;
    }
    public function caculateArea(){
        return pi()* pow($this->radius,2);
    }
    public function caculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}

$circle = new Circle('Circle111',5);
echo "Circle Area :" .$circle->caculateArea()."<br/>";
echo "Circle Perimeter :".$circle->caculatePerimeter()."<br/>";