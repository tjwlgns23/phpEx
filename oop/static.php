<?php
class Person{
    private static $count = 0;
    private $name;

    function __construct($name){
        $this->name = $name;
        self::$count++;
    }

    function enter(){
        echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
    }

    static function getCount(){
        return self::$count;
    }
}

$p1= new Person('person1');
$p1->enter();
$p2= new Person('person2');
$p2->enter();
$p3= new Person('person3');
$p3->enter();

echo Person::getCount();
?>