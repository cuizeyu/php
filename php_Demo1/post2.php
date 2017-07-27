<?php
header("Content-Type:text/html;charset=utf-8");
    //1.接受数据
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //链接数据库
    $coon = new  mysqli("localhost","root","123","haha");
    //编写sql
    $res = $coon->query("select * from users where name='".$user."'");
    $row = $res->fetch_row();
    if($row){
        if ($row[1]==$pass){
            echo "登陆成功";
        }else{
            echo "你的密码是".$row[1];
        }
    }else{
        echo "用户名不存在";
    }

?>
