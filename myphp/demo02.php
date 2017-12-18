<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/6
 * Time: 14:03
 */
header("Content-type: text/html; charset=utf-8");
//对字符串进行操作

//ucfirst  首字母大写
$str1="hello World";
$str2=ucfirst($str1);
echo $str2;//Hello World

//strtolower 全部转换小写
echo "<br>";
$str3=strtolower($str2);
echo $str3;//hello world

//strtoupper()  全部转换大写
echo "<br>";
$str4=strtoupper($str3);
echo $str4;//HELLO WORLD

//strrev 翻转字符串
echo "<br>";
$str5=strrev($str4);
echo $str5;//DLROW OLLEH

//strlen  字符串长度
echo "<br>";
$len=strlen($str3);
for($i=0;$i<$len;$i++){
    echo "<br>".$str3[$i];
}

// 字符串重复输出str_repeat(变量名字，重复次数)
$str6=str_repeat($str1,3);
echo "<br>";
echo $str6;
//补充字符串
// str_pad(变量,"补充的长度","补充的内容",什么方式补充")
//  STR_PAD_BOTH 字符串两边补充
//  STR_PAD_LEFT 字符串左边补充
//  STR_PAD_RIGHT 字符串右边补充
$str7=str_pad($str1,"20","*",STR_PAD_BOTH);
echo "<br>";
echo $str7;
//trim($) 去除字符串两边的空白
//Ltrim($) 去掉左边的空白
//Rtrim($) 去掉右边的空白
$str8="  hello tald   ";
$str9=trim($str8);
echo "<br>";
echo $str9;
//替换字符串中的字符
//str_replace("把字符串中的...","替换成...",替换那个变量$..);
$str10 = str_replace("l","a",$str8);
echo "<br>";
echo $str10;
//回车替换换成<br>  nl2br($...)
$str11="
111
222
333
";
$str12=nl2br($str11);
echo "<br>";
echo $str12;
//html原样输出 htmlspecialchars
$str13="<h1>你好，世界！<h1>";
$str14=htmlspecialchars($str13);
echo "<br>";
echo $str14;


//数组 索引数组
$arr1=array("kete","lucy","Tom");
echo $arr1[0];
for ($i=0;$i<count($arr1);$i++){
    echo $arr1[$i]."<br>";
    //lucy Tom kate
};
//foreach 只用于数组 遍历数组
foreach($arr1 as $value){
    echo $value."<br>";
}
//关联数组
$arr2=array("0"=>"kate","4"=>"lucy","2"=>"Tom");
foreach($arr2 as $k=>$value){
    echo $k."对应的是".$value."<br>";
    //0对应的是kate
    //4对应的是lucy
    //2对应的是Tom
}
//二维数组
$arr=array($arr1,$arr2);
echo count($arr,1);//count 长度  不是1的话就是当前的长度 如果是1的话就递归的对数组计数  COUNT_RECURSIVE
//根据键名进行排序 ksort 升序 krsort 降序
krsort($arr2); //j降序
echo "<br>"; //
print_r($arr2);//输出方式1
foreach ($arr2 as $k=>$v){
    echo $k."对应的是".$v."<br>";
}//输出方式2

//根据键值进行排序 asort升序 arsort 降序
arsort($arr2);//降序
foreach($arr2 as $k=>$v){
    echo $k."对应".$v."<br>";//降序
}
//range 键数组 ascii码排序
//   range(low,high,step)
//范围函数 （ 数组最低值 数组最高值 元素之间的步进制 默认1）
$arr3=range("a","e");
print_r($arr3);
//Array ( [0] => a [1] => b [2] => c [3] => d [4] => e )
$arr4=range("a","g",2);
//                          隔两个输出一个数
foreach($arr4 as $k=>$v){
    echo $v."<br>";
    //a c e g
}
//把数组链接成字符串
$arr5=implode($arr1,"0");
//                      用什么链接
echo "<br>";
echo $arr5;

//把字符串打散成数组
//          用什么分隔开    用什么
$arr6=explode(" ","hello");
echo "<br>";
foreach($arr6 as $k=>$v){
    echo $v."<br>";
    //a c e g
}
//网数组里增加元素 array_unshift($..,"添加..")
//在数组开头添加一个元素 会改变原数组
array_unshift($arr1,"we");
foreach($arr1 as $k=>$v){
    echo "<br>";
    echo $v."在数组开头添加一个元素";
}
//网数组里增加元素 array_push($..,"添加..") 添加到数组最后一个元素
////在数组结尾添加一个元素 会改变原数组
array_push($arr1,"123");
print_r($arr1);
//Array ( [0] => we [1] => kete [2] => lucy [3] => Tom [4] => 123 )
foreach($arr1 as $k=>$v){
    echo "<br>";
    echo $v."<br>";
}
//we kete lucy Tom  123

//删除数组中的元素
//array_pop($..) 删除最后一个元素
array_pop($arr1);
foreach ($arr1 as $k=>$v){
    echo $v."<br>";
}
// we kete lucy  Tom

//array_shift() 删除数组头部的元素
array_shift($arr1);
foreach ($arr1 as $k=>$v){
    echo "<br>";
    echo $v;
}
//kete lucy om  删除数组头部的元素
//以上三种会改变远离数组

//array_unique() 不允许有重复的元素出现 会自动删除重复元素 不会改变原始数组
$arr4=array("1","2","1");
$arr5=array_unique($arr4);
echo "<br>";
foreach($arr5 as $k=>$v){
    echo "<br>".$v."删除数组中重复的元素";
}
//1删除数组中重复的元素
//2删除数组中重复的元素