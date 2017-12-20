<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <style>
        body{
            background: #c6e1f3;
        }
        .main{
            text-align: center;
            width: 684px;
            margin: auto;
        }
        .me{
            border-bottom: solid #000 1px;
            text-align: left;
            box-sizing: border-box;
            overflow: hidden;
        }
        span,strong{
            float: right;
        }
    </style>
</head>
<body>
<div class="main">
    <form method="post" action="action.php">
        <h3>留言板</h3>
        <textarea name="content" cols="100" rows="10" style="resize:none" ></textarea>
        <br>
        姓名：<input type="text" name="username">
        <br>
        <input type="submit" value="提交留言">
    </form>
    <br>
    <?php
        $con=mysql_connect("localhost:3306","root","root","znl") or die("连接失败");
        //链接数据库          端口号                  用户名              密码              连接名
        mysql_query("set names utf8",$con);
        mysql_query("set names 'utf8'");
        //数据库输出的编码 应与你的数据库编码一致 建议用utf-8
    mysql_select_db("znl");
    //打开数据库
    $sql="select * from liuyanban";
    //sql语句
    $result=mysql_query($sql,$con);
    //查询
    while($row=mysql_fetch_array($result))
    {
        echo "<div class='me'>";
            echo "<p>"."<b>姓名:</b>".$row['name']."<span>".$row['id']."楼"."</span>"."</p>";
            echo "<p>"."对你说:"."</p>";
            echo "<p>".$row['content']."<strong>".$row['date']."</strong>"."</p>";
        echo "</div>";

    }
    mysql_close($con);

    ?>
</div>
</body>
</html>