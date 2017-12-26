<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        td{
            border: solid 1px #000;
            width: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<button onclick="getData()">？</button>
<form action="">
    标题：<input type="text" id="title">
    作者：<input type="text" id="author">
    内容：<input type="text" id="content">
   <button type="button" onclick="getform()">提交</button>
    <button type="reset"></button>
</form>
<div  id="box"></div>
<script>
    function getform() {
        var title=document.getElementById("title");
        var author=document.getElementById("author");
        var content=document.getElementById("content");
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            //兼容最新浏览器IE7+, Firefox, Chrome, Opera, Safari
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            //兼容老版本的
        }
        xmlhttp.open("POSt","action.php",true);
        //         传参方式 发送的文件  是否异步true（异步）或 false（同步）
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        //      发送  传递参数
        xmlhttp.send("tit="+title.value+"&aut="+author.value+"&con="+content.value);
        xmlhttp.onreadystatechange=function () {
            //当状态改变时触发方法
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                //0-4时触发时间       服务器相应正常 404
                console.log(xmlhttp.responseText);
                document.getElementById("box").innerHTML=xmlhttp.responseText;
                // var data1=JSON.
            }
        }
    }
    function getData() {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            //兼容最新浏览器IE7+, Firefox, Chrome, Opera, Safari
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            //兼容老版本的
        }
        xmlhttp.open("GET","action.php",true);
        //         传参方式 发送的文件  是否异步true（异步）或 false（同步）
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("flag=select&name=zhang");
        //      发送  传递参数
        xmlhttp.send("tit="+title.value+"&aut="+author.value+"&con="+content.value);
        xmlhttp.onreadystatechange=function () {
            //当状态改变时触发方法
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                //0-4时触发时间       服务器相应正常 404
                console.log(xmlhttp.responseText);
                document.getElementById("box").innerHTML=xmlhttp.responseText;
                // var data1=JSON.
            }
            }
    }

</script>
<?php
    $conn=mysql_connect("localhost:3306","root","root","znl") or die("error connecting") ; //连接数据库
    mysql_query("set names utf8",$conn);
    mysql_query("set names 'utf8'");
    //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
    mysql_select_db("znl"); //打开数据库
    $i=1;

    $sqll="select count(*) count1 from ajax";
    //计算多少  建名 值
    $result1=mysql_query($sqll);
    //执行sql语句
    $row1=mysql_fetch_array($result1);
    $maxRows=$row1['count1'];

    $sql ="select * from ajax"; //SQL语句
    $result = mysql_query($sql,$conn); //查询
    while ($row = mysql_fetch_array($result)){
echo "<td>".$i++."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['author']."</td>";
echo "<td>".$row['content']."</td>";
}
mysql_close($conn);
//关闭
?>
</body>
</html>