<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/12
 * Time: 8:15
 */
header("Content-type: text/html; charset=utf-8");
$url=$_SERVER['REQUEST_URI'];
echo $url;
$arr=[];
if(isset($_COOKIE["history"]))
{
    $arr=unserialize($_COOKIE["history"]);
    //反序列化unserialize 成数组
    //序列化serialize
//    print_r($arr);
    array_unshift($arr,$url);
    //在arr开头插入一个元素url
    $arr=array_unique($arr);
    //去重之后的arr
    if(count($arr)>10){
        array_pop($arr);
    }
    //多于10的时候删除最后一个
    $str=serialize($arr);
    // 序列化成字符串
    setcookie("history",$str);
    //发送一个cookie        str为数组  cookie中键值只能为字符串

}else{
    array_unshift($arr,$url);
    //在arr开头插入一个元素url
    $str=serialize($arr);
    setcookie("history",$str,-1);
}
foreach ($arr as $v){
    echo "<br>";
    echo $v;
}
echo "<br>";
echo '<a href="'.$_SERVER['PHP_SELF'].'?id='.mt_rand().'">点击跳转</a>';
//$_SERVER['PHP_SELF'] 获取路径
//mt_rand() 随机数
//跳转到当前