<?php
    require_once("lib/print.php");
    //중복 선언되는 것을 막기 위해 require_once 함수를 사용
?>
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
    print_list();
    print_name();
    ?>
</body>
</html>