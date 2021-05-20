<?php
abstract class ParentClass{
    public function a(){
        echo 'a';
    }
    public abstract function b();
}

class ChildClass extends ParentClass{
    public function b(){
        echo 'b';
    }
}

$test = new ChildClass();
$test->b();
?>