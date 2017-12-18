<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/13
 * Time: 14:10
 */
header("Content-type: text/html; charset=utf-8");
//中文乱码
session_start();
//开启session 只能开启一次  改完配置文件需重启服务器
//不同浏览器访问一个网站 会产生不同的session
$_SESSION["username"]="znl";
$_SESSION["age"]="20";
print_r($_SESSION);