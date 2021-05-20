<?php
require_once("lib/connect.php");
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <h1>single row</h1>
    <?php
        $sql = "select * from topic where id=1";
        $result = mysqli_query(connectDB(), $sql) or die("connect fail");
        $row = mysqli_fetch_array($result);
        echo "<h2>".$row['title']."</h2>";
        echo $row['description'];
        mysqli_close();
    ?>

    <h1>multi row</h1>
    <table>
    <?php
        $sql = "select * from topic";
        $result = mysqli_query(connectDB(), $sql) or die("connect fail");
        $row = mysqli_fetch_array($result);
        while($row = mysqli_fetch_array($result)){
            echo "<tr><td>".$row['title']."</td>
            <td>".$row['description']."</td>
            <td>".$row['created']."</td>
            </tr>";
            
        }
        mysqli_close();
    ?>
    </table>
</body>
</html>