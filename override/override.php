<?php
class parentClass{
    function callMethod($param){
        echo "<h1>Parent {$param}</h1>";
    }
}

class childClass extends parentClass{
    function callMethod($param){
        parent::callMethod($param);
        echo "<h1>Child {$param}</h1>";
    }
}

$obj = new childClass();
$obj->callMethod('method');
?>