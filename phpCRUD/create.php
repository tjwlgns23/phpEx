<?php
    require_once("lib/connect.php");
    $sql = "select * from author";
    $result = mysqli_query(connectDB(), $sql);
    $select_form = "<select name='author_id'>";
    while($row = mysqli_fetch_array($result)){
        $select_form .= "<option value='".$row['id']."'>".$row['name']."</option>";
    }
    $select_form .= "</select>";
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <form action="process_create.php" method="post">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" cols="30" rows="10" style="white-space: pre-line;"></textarea></p>
        <?=$select_form?>
        <p><input type="submit"></p>
    </form>
</body>
</html>