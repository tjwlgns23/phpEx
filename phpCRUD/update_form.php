<?php
    require_once("lib/connect.php");
    $sql = "select id, title, description from topic where id={$_GET['id']}";
    $result = mysqli_query(connectDB(), $sql) or die("connect fail");
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <?php
    echo "<form action='process_update.php' method='post'>
        <p><input type='hidden' name='id' value={$row['id']}></p>
        <p><input type='text' name='title' value={$row['title']}></p>
        <p><textarea name='description' cols='30' rows='10' style='white-space: pre-line;'></textarea></p>
        <p><input type='submit'></p>
        
    </form>"
    ?>
</body>
</html>

<?php
    mysqli_close();
?>