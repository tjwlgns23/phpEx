<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $str="test"; ?>
    <h2>nl2br<h2>
    <?php echo nl2br($str); ?>

    <ol>
        <li><a href="function.php?id=html">html</a></li>
        <li><a href="function.php?id=css">css</a></li>
        <li><a href="function.php?id=java">java</a></li>
    </ol>

    <?php 
        
        echo file_get_contents("data/".$_GET['id']);
    ?>
</body>
</html>