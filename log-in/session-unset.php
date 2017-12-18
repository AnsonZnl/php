<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/14
 * Time: 8:05
 */
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION["uname"]="张三";
$_SESSION["age"]="20";
$_SESSION["sex"]="boy";
print_r($_SESSION);
unset($_SESSION["sex"]);
//什么变量都能清楚。清楚某一个变量
//删除session文件里内容不成功 存在cookie 里有缓存
//session_destroy();
//删除session文件成功