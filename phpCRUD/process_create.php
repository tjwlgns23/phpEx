<?php
require_once("lib/connect.php");
// $conn=connectDB();
// $conn = mysqli_connect("121.126.223.225", "root", "dbFkdlqmahffh12#$", "testDB");
$sql="insert into topic(title, description, created, author_id) values(
    '{$_POST['title']}',
    '{$_POST['description']}',
    NOW(),
    '{$_POST['author_id']}'
    )";
$result = mysqli_query(connectDB(), $sql);
if($result === false){
    error_log(mysqli_error(connectDB()));
}else{
    echo "성공했습니다. <a href='index.php'>돌아가기</a>";
}

?>