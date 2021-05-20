<?php
ini_set("display_errors", 1);
class MyFileObject extends SplFileObject{
  function getContents(){
    $content = $this->fread($this->getSize());
    $this->rewind();
    return $content;
  }
}
$file = new MyFileObject('data.txt');
var_dump($file->getContents());
?>
