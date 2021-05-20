<?php 
    function print_name(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo "id not exist";
        }
    }

    function print_list(){
        $list = scandir('./data');
        $i=0;
        while($i < count($list)){
            if($list[$i] !='.'){
                if($list[$i] !='..'){
                    echo "<li><a href=\"function2.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
            $i = $i + 1;
        }
    }
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