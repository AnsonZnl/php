<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/7
 * Time: 10:47
 */
header("Content-type: text/html; charset=utf-8");
//单个值 用 $_GET  或者 $_POST
echo $_POST["username"]."登录成功！";
echo "<a href='demo03_1.php'></a>>";
/*
echo "用户名是：".$_GET["username"];
echo "<br>";
echo "性别是：".$_GET["age"];
echo "<br>";
echo "地址栏?后面的值是：".$_SERVER["QUERY_STRING"];
echo "<br>";
echo "获取 http://localhost 后面的值是：".$_SERVER['REQUEST_URI'];
echo "<br>";
echo "获取当前脚本的路径是：".$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "当前正在执行脚本的文件名：".$_SERVER["PHP_SELF"];
//多个值用  print_r($_GET);

/*http://localhost/aaa/index.php?p=222&q=333
结果：
$_SERVER['QUERY_STRING'] = "p=222&q=333";
$_SERVER['REQUEST_URI']  = "/aaa/index.php?p=222&q=333";
$_SERVER['SCRIPT_NAME']  = "/aaa/index.php";
$_SERVER['PHP_SELF']     = "/aaa/index.php";

由实例可知：
$_SERVER["QUERY_STRING"]  获取查询 语句，实例中可知，获取的是?后面的值
$_SERVER["REQUEST_URI"]   获取 http://localhost 后面的值，包括/
$_SERVER["SCRIPT_NAME"]   获取当前脚本的路径，如：index.php
$_SERVER["PHP_SELF"]      当前正在执行脚本的文件名
*/
//http://www.runoob.com/php/php-post.html  参考界面