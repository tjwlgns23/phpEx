<?php
ini_set("display_errors", 1);
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
?>

<h1>oop</h1>
<?php
ini_set("display_errors", 1);
$file = new SplFileObject('data.txt');
var_dump($file->fread($file->getSize()));
?>