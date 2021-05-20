<?php
    setcookie("cookie1", "testCookie1");
    setcookie("cookie2", time(), time()+60);
?>

<?php
    echo $_COOKIE['cookie1']."<br>";
    echo time()-$_COOKIE['cookie2'];
?>