<?php
    include "./muo.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-size: 12px;
        }
        table{
            border:1px solid #000;
            text-align: left;
        }
        td,th,tr{
            border:1px solid #000;
        }
    </style>
</head>
<body>
<table>
<thead>
<th>序号</th>
<th>标题</th>
<th>作者</th>
<th>内容</th>
<th>日期</th>
</thead>


<?php
$conn=mysql_connect("localhost:3306","root","root","znl") or die("error connecting") ; //连接数据库
mysql_query("set names utf8",$conn);
mysql_query("set names 'utf8'");
//数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.

mysql_select_db("znl"); //打开数据库

$sql ="select * from newslist "; //SQL语句

$result = mysql_query($sql,$conn); //查询
while ($row = mysql_fetch_array($result)){
    echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['author']."</td>";
        echo "<td>".$row['content']."</td>";
        echo "<td>".$row['date']."</td>";
    echo "</tr>";
}
mysql_close($conn);
//关闭
?>
</table>
</body>
</html>