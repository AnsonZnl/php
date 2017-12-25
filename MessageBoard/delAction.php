<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/21
 * Time: 8:30
 */
if(isset($_GET[id])){
    $con=mysql_connect("localhost:3306","root","root","znl") or die("error connecting") ; //连接数据库
    mysql_query("set names utf8",$con);
    mysql_query("set names 'utf8'");
//数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
    mysql_select_db("znl"); //打开数据库
    $sql="delete from liuyanban where id=$_GET[id]";
    mysql_query($sql,$con);
    mysql_close($con);
    header("Location:index.php");
}