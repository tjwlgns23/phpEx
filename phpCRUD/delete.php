<?php   
    require_once("lib/connect.php");
    $sql = "select * from topic";
    $result = mysqli_query(connectDB(), $sql) or die("connect fail");
    $list="";
    $row = mysqli_fetch_array($result);
    while($row=mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"process_delete.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    
    <h1><a href="index.php">WEB</a></h1>
    <?=$list?>
    
  </body>
</html>