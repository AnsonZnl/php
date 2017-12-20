<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/20
 * Time: 19:55
 */
if(isset($_POST["username"])){
    $con=mysql_connect("localhost:3306","root","root","znl") or die("连接失败");
    //链接数据库          端口号                  用户名              密码              连接名
    mysql_query("set names utf8",$con);
    mysql_query("set names 'utf8'");
    //数据库输出的编码 应与你的数据库编码一致 建议用utf-8
    mysql_select_db("znl");
    //打开数据库
    $sql="insert into liuyanban(name,content) value ('$_POST[username]','$_POST[content]')";
    mysql_query($sql,$con);
    mysql_close($con);
    header("Location:index.php");
}