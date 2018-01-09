<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/1/5
 * Time: 16:48
 */
header("content-type:text/html;charset=utf-8");
session_start();
if (isset($_POST))
{
    if ($_POST['code']==$_SESSION['code']){
        echo "验证码正确";
    }else{
        echo "验证码错误";
    }
}else{
    echo "没传过数据";
}