<?php
ini_set("display_errors", 1);
class person{
    private $name;
    public function sayHi(){
        print("Hi I'm. {$this->name}.");
    }

    public function setName($_name){
        $this->ifEmptyDie($_name);
        $this->name = $_name;
    }

    //method를 통해 private 변수 반환
    public function getName(){
        return $this->name;
    }

    private function ifEmptyDie($value){
        if(empty($value)){
            die('I need name');
        }
    }
}

$example = new Person();
$example->setName('Jihoon');
$example->sayHi();
print($example->getName());
?>