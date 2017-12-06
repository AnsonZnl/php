<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--解决中文乱码一-->
<?php
//<!--解决中文乱码二-->
//header("Content-type: text/html; charset=utf-8");
echo "您好";
echo "<br>";
$x="hello";

echo "经常说$x";
echo "<br>";
$y=10+"123abc";
echo "$y";#133 【php 中 数字相加 字符串为0
# php 中变量用$ 输出时用""不支持''
echo "<br>";
$z=10;
echo var_dump($z);# 查看数据类型
#数据类型有
//boolean （布尔型）
//integer （整型）
//float （浮点型, 也称作 double)
//string （字符串）
//两种复合类型：
//array （数组）
//object （对象）
//最后是两种特殊类型：
//resource　（资源）
//NULL　（NULL）

 #isset功能：判断变量是否被初始化(变量是否存在)
  #empty功能：检测变量是否为"空"   
$n=10;
if(isset($n)){
    echo "变量存在";
}else{
    echo "变量不存在";
};
echo "<br>";
if(empty($n)){
    echo "变量为空";
}else{
    echo "变量不为空";
};
//传值和传址 传值改为传址用&  默认是传值 可用&改为传址 
$a=10;
$b=&$a;
$a=11;
echo "<br>";
echo "a是$a";
echo "<br>";
echo "b时$b";
//定义常量用 define 用大写
echo "<br>";
define ('NAME','hello');
echo NAME;# hello
//判断常量是否存在
echo "<br>";
if (defined('NAME')) {
    echo "常量存在";
}else{
    echo "常量不存在";
}
// function
echo "<br>";
function fun1(){
    $qq=20;
    echo $qq;
}
fun1();#20

//字符串链接变量 用.
//不用传址
echo "<br>";
function fun2($qq1){
    $qq1=20;
    echo "qq2这个值是".$qq1;
}
$qq2=20;
fun2($qq2);
//用传址
echo "<br>";
$qq2=30;
function fun3(&$qq1){
    $qq1=24;
    echo "qq2 改变为传址这个值是".$qq1;
};
fun3($qq2);
//qq1=qq2 都是30 然后 qq1改为24  qq2也是24 因为加了&qq1
echo "<br>";
echo "传址之后qq2的值是".$qq2;
//qq1=qq2 都是30


//全局变量
$m=50;
function fun4(){
    global $m;#局部改变使用全局变量
    $m=20;
}
echo "<br>";
fun4();
echo "<br>";
echo "$m";
echo "<br>";
//局部变量
//$h=10;
function fun5(){
    $h=40;
    return $h;
}
$h=fun5();# 把局部转为全局
echo "$h";
//静态变量 用static 定义 静态变量只存在于函数作用域内，也就是说，静态变量只存活在栈中。
//一般的函数内变量在函数结束后会释放，比如局部变量，但是静态变量却不会。就是说，下次再调用这个函数的时候，该变量的值会保留下来。
echo "<br>";
function fun6(){
    static $k=0;
    $k++;
    echo "$k<br>";
}
fun6();
fun6();
fun6();

?>
