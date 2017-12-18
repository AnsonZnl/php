<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/13
 * Time: 14:44
 */
header("Content-type: text/html; charset=utf-8");
session_start();
if(isset($_SESSION["username"])){
    echo "欢迎".$_SESSION["username"];
    echo "<a href='loginAction01.php?flag=destory'>注销</a>";
}else{
    echo '<script>alert("登录超时，请重新登录"); location.href="login01.php";</script>';
}
