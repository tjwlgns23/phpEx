<?php

ini_set("display_errors", "1");
session_save_path("/var/lib/php/session/");
session_start();
$_SESSION['title'] = '생활코딩';
echo $_SESSION['title'];
echo file_get_contents('/var/lib/php/session/sess_'.session_id());
?>