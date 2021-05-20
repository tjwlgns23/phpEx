<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php var_dump(1==1); ?>

<a href="boolean.php">noid</a>
<a href="boolean.php?id=test">id</a>
<h2>
<?php
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{
        echo "no var";
    }
?>
</h2>
</body>
</html>

