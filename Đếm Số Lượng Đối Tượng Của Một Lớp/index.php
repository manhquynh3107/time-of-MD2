<?php
class Application{
    private $name;
    public static $count = 0;
    public function __construct($name)
    {
        $this->name= $name;
        self::$count++;
    }
    public function __toString()
    {
        return 'Application name:'.$this->name;
        // TODO: Implement __toString() method.
    }
}
echo 'Total objects count :'.Application::$count."<br/>";
$app1 = new Application('Black Pinapple');
echo 'Total objects count :'.Application::$count."<br/>";
$app2 = new Application('Blue Water Lemon');
echo 'Total objects count :'.Application::$count."<br/>";
echo $app1."<br/>";
echo $app2."<br/>";