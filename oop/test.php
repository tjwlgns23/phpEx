<?php
class MyFileObject{
  function isFile(){
    return is_file($this->filename);
  }

  //생성자
  function __construct($fname){
      $this->filename = $fname;
  }
}
$file = new MyFileObject('data.txt');
// $file->filename='data.txt';
var_dump($file->isFile());

