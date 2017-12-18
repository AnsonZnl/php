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
    //判断是否存在 $_POST
    $user=$_POST["uname"];
    //接受过来的 uname=user
    $psd=$_POST["psd"];
    //接收过来的psd =psd
    if($user==="kee"){
        //    与数据库中进行比对  kece 是数据库的数据
        $_SESSION["username"]=$_POST["uname"];
        //把传过来的uname赋给$_SESSION["username"]
        header("location:main01.php");
        //跳转到main01.php
    }else{
        echo '<script>alert("用户名或密码不正确");location.href="login01.php"</script>';
//        header("Location:login01.php");
    }
}
if(isset($_GET["flag"])){
    if($_GET["flag"]===destory){
        session_unset();
        session_destroy();
//        **session_unset()**：释放当前在内存中已经创建的所有$_SESSION变量，但是不删除session文件以及不释放对应的session id；
//        **session_destroy()**：删除当前用户对应的session文件以及释放session id，内存中$_SESSION变量内容依然保留；
        header("Location:login01.php");
    }
    if($_GET["flag"]===add){

    }
}