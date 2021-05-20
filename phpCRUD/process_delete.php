<?php
    require_once("lib/connect.php");
    $sql = "delete from topic where id={$_GET['id']}";
    $result = mysqli_query(connectDB(), $sql) or die("connect fail");
    echo "삭제되었습니다. <a href='delete.php'>돌아가기</a>";
?>