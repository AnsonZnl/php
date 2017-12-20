<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/12/20
 * Time: 17:24
 */
if(isset($_POST["title"])){
    $conn=mysql_connect("localhost:3306","root","root","znl") or die("error connecting") ; //连接数据库
    mysql_query("set names utf8",$conn);
    mysql_query("set names 'utf8'");
//数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
    mysql_select_db("znl"); //打开数据库
    $sql="insert into newslist(title,author,content,date) value('$_POST[title]','$_POST[author]','$_POST[content]','date(y/m/d)')";
    mysql_query($sql,$conn);
    mysql_close($conn);
    header("Location:index.php");
}