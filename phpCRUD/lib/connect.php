<?php
function connectDB(){
    $conn = mysqli_connect("121.126.223.225", "root", "dbFkdlqmahffh12#$", "testDB");
    return $conn;
}
?>