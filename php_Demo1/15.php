<?php
header("Content-Type:text/html;charset=utf-8");
    //1.连数据库
    $conn=new mysqli('localhost','root','123','haha');
    //2.sql
    $res = $conn->query('select * from users');
    //3.只能取一条(数组)
    $row = $res->fetch_row();
    echo $row[0];
    $res->free();
    $conn->close();
?>
