<?php
header("Content-type: text/html; charset=utf-8");
session_start();
if(isset($_SESSION["username"])){
    echo "您已登录<a href='loginAction01.php?flag=destory'>注销</a><a href='loginAction01.php?flag=add'>";
    //路径？传参   根据什么参数执行什么样的操作
    return;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="loginAction01.php">
    有户名：<input type="text" name="uname" class="username">
    <br>
    密码：<input type="password" name="psd" class="password">
    <br>
    <button type="button" onclick="check()">提交</button>
</form>
<script>
    function check() {
        //判断用户名密码是否为空 判断是否符合验证
        var username=document.querySelector(".username");
        var form=document.querySelector("form");
        if(username.value!==""){
            form.submit();
            return true;
        }else {
            alert("用户名为空");
            return false
        }
    }
</script>
</body>
</html>
