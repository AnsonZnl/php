<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/7
 * Time: 8:56
 */
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
//设置时区  PRC 中国
$date = date("Y-m-d H:i:s");
//时间格式
echo $date;
sleep(1);
//睡眠 延迟几秒
circleTime();
//循环输出 调用
function circleTime(){
    $key="<script type=text/javascript>document.body.innerHTML='';</script>";
    //在php 里的$key="这里可以放js代码"  清空上一次的时间
    echo $key;
    //显示最新的时间
    set_time_limit(0);
    // 0 一直执行
    global $date;
    $date = date("Y-m-d H:i:s");
    //获取时间
    print $date;
    //刷新
    ob_flush();
//   ob_flush — 冲刷出（送出）输出缓冲区中的内容
    flush();
    //调用
    sleep(1);
    //调用
    circleTime();
    //调用
}

?>