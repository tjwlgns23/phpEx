<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $test = array(1,2,3,4,5);
        echo $test[1]."<br>";
        echo $test[3]."<br>";
        var_dump(count($test));
        array_push($test, 6);
        var_dump(count($test));
    ?>
</body>
</html>