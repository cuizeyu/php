<?php
header("Content-Type:text/html;charset=utf-8");
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $str = '名字:'.$user.'密码:'.$pass;
    echo $str;
?>
