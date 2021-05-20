<?php
    require_once("lib/connect.php");
    settype($_POST['id'], "integer");
    
    $filtered = array(
        'id'=>mysqli_real_escape_string(connectDB(), $_POST['id']),
        'title'=>mysqli_real_escape_string(connectDB(), $_POST['title']),
        'description'=>mysqli_real_escape_string(connectDB(), $_POST['description'])
    );
    
    $sql = "update topic set title = '{$filtered['title']}', 
    description = '{$filtered['description']}' 
    where id = '{$filtered['id']}'";

    $result = mysqli_query(connectDB(), $sql) or die("connect fail");
    echo "변경되었습니다. <a href='select.php'>돌아가기</a>";
?>