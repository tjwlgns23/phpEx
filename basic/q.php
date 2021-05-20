<?php
class MyFileObject{
  function isFile(){
    return is_file($this->filename);
  }
}
$file = new MyFileObject();
$file->filename = 'data.txt';
var_dump($file->isFile());
var_dump($file->filename);
?>