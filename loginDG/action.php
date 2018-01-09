<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/1/5
 * Time: 16:27
 */
header("content-type:text/html;charset=utf-8");
session_start();
//print_r($_POST);
//echo $_POST['code']." ".$_SESSION['code'];
if(isset($_POST)){
    if ($_POST['code']==$_SESSION['code'])
    {
        echo "登录成功";
    }else{
        echo "验证码不正确";
    }
}else{
    echo"没传过数据";
}
