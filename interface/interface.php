<?php
ini_set("display_errors", 1);
interface ContractInterface{
    public function promiseMethod($param);
}

class ConcreateClass implements ContractInterface{
    public function promiseMethod($param):int{
        return $param;
    
    }
}


$obj = new ConcreateClass();
echo $obj->promiseMethod(123);
?>