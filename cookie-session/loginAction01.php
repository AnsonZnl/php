<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/13
 * Time: 14:44
 */
header("Content-type: text/html; charset=utf-8");
session_start();
if(isset($_POST)){
    $user=$_POST["uname"];
    $pas=$_POST["psd"];
//    与数据库中进行比对  kece 是数据库的数据
    if($user==="kee"){
        $_SERVER["username"]=$_POST["uname"];
        header("Location:main.php");
    }else{
        echo '<script>alert("用户名或密码不正确");location.herf="main01.php"</script>';
//        header("Location:login01.php");
    }
}