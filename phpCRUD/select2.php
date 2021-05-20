<?php   
    require_once("lib/connect.php");
    $sql = "select * from topic";
    $result = mysqli_query(connectDB(), $sql) or die("connect fail");
    $list="";
    $row = mysqli_fetch_array($result);
    while($row=mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"select2.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
    

    $article = array(
        "title"=>"Welcome",
        "description"=>"Hello World!"
    );

    if(isset($_GET['id'])){
        $filtered_id = mysqli_real_escape_string(connectDB(), $_GET['id']);
        $sql = "select * from topic left join author on topic.author_id = author.id where topic.id={$filtered_id}";
        $result = mysqli_query(connectDB(), $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
        $article['author'] = $row['name'];
    }
    mysqli_close();

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
    <ol>
        
    </ol>
    <h2><?=$article['title']?></h2>
    <p><?=$article['description']?></p>
    <p>by <?=$article['author']?></p>
  </body>
</html>