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
        p{
            overflow: hidden;
        }
        span{
            float: right;
        }
        strong{
            float: left;
        }
    </style>
</head>
<body>
<div class="main">
    <form method="post" action="addAction.php">
        <h3>留言板</h3>
        <textarea id="content" name="content" cols="100" rows="10" style="resize:none" ></textarea>
        <br>
        姓名：<input id="username" type="text" name="username">
        <br>
        <input type="submit" value="提交留言" onclick="yanzhen()">
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
    $i=1;
    while($row=mysql_fetch_array($result))
    {
        echo "<div class='me'>";
            echo "<p>"."<b>姓名:</b>".$row['name']."<span>".$i++."楼"."</span>"."</p>";
            echo "<p>"."对你说:"."</p>";
            echo "<p>"."<strong>".$row['content']."</strong>"."<span>".$row['date']."</span>"."</p>";
            echo "<p><a href='javascript:void(0);' onclick='del($row[id])' >删除留言</a></p>";
//        这里表示这个链接不做跳转动作，执行onClick事件。
//        Javascript中void是一个操作符，该操作符指定要计算一个表达式但是不返回值。
        echo "</div>";

    }
    mysql_close($con);
//执行后删除
    ?>
    <script>
        function yanzhen() {
            if (username.value!==""){
                window.location.href="addAction.php";
            }else{
                alert("姓名与内容不得为空")
            }
        }
        function del(thisIndex) {
            if(confirm("确定删除这条留言吗")){
                window.location.href="delAction.php?id="+thisIndex;
            }else {
                return false;
            }
        }

    </script>
</div>
</body>
</html>