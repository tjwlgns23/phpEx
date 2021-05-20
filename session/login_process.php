<?php
    session_start();
    $id = 'tjwlgns23';
    $pwd = '1234';

    if(!empty($_POST['id']) && !empty($_POST['pwd'])){
        if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
            $_SESSION['is_login'] = true;
            $_SESSION['nickname'] = "서지";
            header('Location: ./session.php');
            exit;
        }
    }
    echo 'login fail'
?>