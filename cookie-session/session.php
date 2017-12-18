<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/12
 * Time: 10:10
 */

//session_start();                // 首先开启session
//$_SESSION['user'] = 'username';  // 把username存在$_SESSION['user'] 里面
//echo $_SESSION['user'];          // 直接输出 username
//
//session_destroy();               // 销毁session

header("Content-type: text/html; charset=utf-8");
session_start();
setcookie("text","is is text");
//打开配置文件 php-ini
//修改 session.auto 0（手动启动）1（自动启动） session_so  之后重启服务器
//查看保存地址 session.save
//分配session id
//创建session 文件
//session
echo $_COOKIE["text"];
echo "<br>";
//print_r($_COOKIE);
//打印cookie
echo "<br>";
echo session_name();//PHPSESSID
//session 的键名
echo "<br>";
echo session_id();//2diql4ls4pp8e89fss1ot4vik4
//session 键值//垃圾回收机制
//php-ini
//session.gc_probability=1
//session.gc_divisor=1000
//他有1/1000分支以的被回收
//session。gc_maxlifetime=1400
//最大过期时间

