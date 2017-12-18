<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/7
 * Time: 8:03
 */
//超全局变量
header("Content-type: text/html; charset=utf-8");
//global $var 是外部$var的同名引用或者指针。global是起传递参数的作用，而并非使变量的作用域为全局。
//global的作用就相当于传递参数，在函数外部声明的变量，如果在函数内想要使用，就用global来声明该变量，这样就相当于把该变量传递进来了，就可以引用该变量了
$name="why";//定义变量name,并初始化
function echoName()
{
//通过global来声明$name，相当于传递参数
global $name;
echo "myname is ".$name."<br>";
}
echoName();

//$GLOBALS['var'] 是外部的全局变量$var本身。
$v=500;
function g(){
    $GLOBALS["c"]=$GLOBALS["v"]+$GLOBALS["v"];
    echo $GLOBALS["c"];
}
g();//1000
//php 路径
//get 路径显示 post 加密
  echo "
    <form action='demo03_1.php' method='post'>
        <label>用户名：</label>
        <input type='text' name='username' >
        <label>密码：</label>
        <input type='password' name='qwd' >
        <label>性别：</label>
        <input type='text' name='age' >
        <input type='submit'>
    </form>
"
//php url地址栏传中文乱码解决方法集合
//http://www.jb51.net/article/24004.htm


//php ini session.save
//cookies

?>
