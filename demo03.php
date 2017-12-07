<?php
header("Content-type:text/html;charset=utf-8");
$arr1 = range(0,5,2);
$arr2 = range("a","s",3);
foreach ($arr2 as $k=>$v){
    echo $v."<br>";
}
//把数组连接成字符串
$str1 = implode($arr2,"*");
echo "<br>";
echo $str1;

//把字符串打散成数组
$arr3 = explode(" ","hello world");
echo "<br>";
foreach ($arr3 as $k=>$v){
    echo $v."<br>";
}

//往数组中增加元素
array_unshift($arr2,"we");
echo "<br>";
foreach ($arr2 as $k=>$v){
    echo $v."<br>";
}
array_push($arr2, 6); //增尾方法
foreach ($arr2 as $k=>$v){
    echo $v."<br>";
}
array_shift($arr2);
echo "删除数组中头部元素<br>";
foreach ($arr2 as $k=>$v){
    echo $v."<br>";
}


//删除数组中的元素
array_pop($arr2);
echo "删除数组中尾部元素<br>";
foreach ($arr2 as $k=>$v){
    echo $v."<br>";
}
$arr4 = array("1","2","1");
$arr5=array_unique($arr4);//不会改变原始数组
echo "删除重复元素<br>";
foreach ($arr5 as $k=>$v){
    echo $v."<br>";
}
?>