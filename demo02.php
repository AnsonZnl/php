<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 17/12/6 006
 * Time: 下午 5:12
 */
header("Content-type:text/html;charset=utf-8");
$arr1 = array("kate","lucy","Tom");
echo $arr1[0];
for($i=0;$i<count($arr1);$i++)
{
    echo $arr1[$i]."<br>";
}
//foreach只用于数组
foreach ($arr1 as $value){
    echo $value."<br>";
}
//关联数组
$arr2=array("0"=>"kate","4"=>"lucy","2"=>"Tom");

foreach ($arr2 as $k=>$value)
{
    echo $k."对应的是".$value."<br>";
}

//二维数组
$arr = array($arr1,$arr2);

echo count($arr,1);

//根据键名进行排序ksort升序，krsort降序

/*krsort($arr2);
echo "<br>";
foreach ($arr2 as $k=>$v){
    echo $k."对应的是".$v."<br>";
}*/
//根据键值进行排序asort升序，arsort降序
arsort($arr2);
foreach ($arr2 as $k=>$v){
    echo $k."对应的是".$v."<br>";
}
//range建数组
$arr3=range("a","e");
print_r($arr3);