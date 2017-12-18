<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/11
 * Time: 14:30
 */
//具体来说cookie机制采用的是在客户端保持状态的方案，而session机制采用的是在服务器端保持状态的方案。
setcookie('sbsh',"my is sbsh",time()+3600);
//        建名            建值                时间
echo $_COOKIE['sbsh'];
echo "<br>";
//cookie第一次刷新的时候不会发送请求，第二次会带过去的
$str=serialize($_COOKIE);
echo $str;
///序列化 成字符串
echo "<br>";
$arr=unserialize($str);
print_r($arr) ;
// 反序列化  成数组