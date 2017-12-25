<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <!--图标网址 http://fontawesome.io/icons/-->
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #c6e1f3;
        }

        .main {
            text-align: left;
            margin: auto;
            width: 900px;
            background: #fff;
            padding: 20px;

        }

        li {
            float: left;
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .fl {
            float: left;
        }

        .fr {
            float: right;
        }

        .over {
            overflow: hidden;
        }

        .wrap {
            width: 1050px;
            margin: 0 auto;
        }

        .me {
            padding: 5px;
            border-bottom: solid #ccc 1px;
            text-align: left;
            box-sizing: border-box;
            overflow: hidden;
        }

        p {
            overflow: hidden;
        }

        span {
            float: right;
        }

        strong {
            float: left;
        }

        .top-fix-container {
            position: relative;
            height: 41px;
            z-index: 550;
            background: #000;
        }

        .top-fix-wrap {
            width: 1046px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .logo {
            float: left;
            display: inline-block;
            width: 90px;
            height: 41px;
            background: url("img/icenter32.png") -63px 0;
        }

        .top-nav {
            float: left;
            padding-left: 10px;
            list-style: none;
            overflow: hidden;
        }

        .top-nav > li {
            float: left;
            margin-left: 10px;
            margin-right: 10px;
        }

        .top-nav .icon-icenter {
            display: inline-block;
            width: 16px;
            height: 16px;
            color: #fff;
            margin-right: 4px;
            font-size: 17px;
        }

        .top-nav > li a {
            display: block;
            color: #fff;
            line-height: 41px;
            text-decoration: none;
            font-size: 13px;
        }

        header {
            height: 250px;
            padding-top: 20px;
            background: url("img/bg.jpg") no-repeat center 0;
        }

        .head-detail {
            margin-top: 90px;
        }

        .like {
            height: 20px;
            width: 40px;
            margin-right: 50px;
            margin-top: 50px;
            padding: 7px 15px;
            border-radius: 14px;
            background: #000;
            opacity: .5;
            font-size: 13px;
            color: #fff;
            cursor: pointer;
        }

        .uname h3 {
            font-size: 20px;
            margin-top: 5px;
            margin-bottom: 10px;
            margin-left: 5px;
        }

        .qz_vip {
            display: inline-block;
            width: 97px;
            height: 46px;
            background: url(img/ico2.png) 748px -162px;
            background-size: 1624px 116px;
        }

        .u_but {
            font-size: 13px;
        }

        .jindu {
            width: 182px;
            height: 10px;
            margin-top: 10px;
            background-image: url(img/ico2.png);
            background-position: -366px -104px;
        }

        .hz {
            width: 82px;
            height: 26px;
            margin-top: 10px;
            margin-left: 20px;
            background-image: url(https://qzonestyle.gtimg.cn/aoi/img/qz-vip-btn/icon-vip-fee.png?max_age=19830212&d=20170302112643);
        }

        /*nav*/
        nav ul {
            width: 700px;
            height: 50px;
            line-height: 50px;
            margin: auto;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: inline-block;
            width: 70px;
            font-size: 15px;
            color: #000;
        }

        nav li a:hover {
            color: azure;
        }

        /*main*/
        .title2 {
            text-align: left;
            padding-bottom: 10px;
            border-bottom: solid #ccc 2px;
        }
        .but button{
            width: 80px;
            height: 30px;
        }

    </style>
</head>
<body>
<div class="top-fix-container">
    <div class="top-fix-wrap">
        <a class="logo" href="" title="QQ空间"></a>
        <ul class="top-nav">
            <li><a href=""><i class="fa fa-user-o icon-icenter"></i>个人中心</a></li>
            <li><a href=""><i class="fa fa-home icon-icenter"></i>我的主页</a></li>
            <li><a href=""><i class="fa fa-users icon-icenter"></i>好友</a></li>
            <li><a href=""><i class="fa fa-th-large icon-icenter"></i>游戏</a></li>
            <li><a href=""><i class="fa fa-address-card-o icon-icenter"></i>装扮</a></li>
        </ul>
    </div>
</div>
<header>
    <div class="layout-head-inner over wrap">
        <div class="head-left fl">
            <h2>张宁乐的空间</h2>
            <p>最怕一生碌碌无为，还说平凡可贵。</p>
            <div class="head-detail over">
                <img class="fl" src="https://qlogo1.store.qq.com/qzone/1160030724/1160030724/100?1487731633" alt="">
                <div class="uname fr over">
                    <h3>张宁乐</h3>
                    <div class="u_top fl">
                        <i class="qz_vip"></i>
                    </div>
                    <div class="hz fr"></div>
                    <div class="u_but fr">
                        成长值426成长速度-10点/天
                        <div class="jindu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="head-right fr">
            <div class="like" id="like" onclick="spanjia()">
                <i class="fa fa-thumbs-up"></i>
                <span>10</span>
            </div>
        </div>
    </div>
</header>
<nav>
    <div class="wrap">
        <ul class="over">
            <li><a href="">主页</a></li>
            <li><a href="">日志</a></li>
            <li><a href="">相册</a></li>
            <li><a href="">留言板</a></li>
            <li><a href="">说说</a></li>
            <li><a href="">个人档</a></li>
            <li><a href="">音乐</a></li>
            <li><a href="">更多</a></li>
        </ul>
    </div>
</nav>
<div class="main">
    <form method="post" action="addAction.php">
        <h3 class="title2">留言板</h3>
        <!--        <textarea id="content" name="content" cols="100" rows="10" style="resize:none" ></textarea>-->
        <br>
       <p> 主人寄语：</p>
        <br>
        <div id="div1" style="background:#fff; ">
            <p>请输入内容...</p>
        </div>
        <textarea id="text1" name="content" style="display:none;"></textarea>
        <br>
       <div class="over">
           <div class="fl"> 姓名：<input id="username" type="text" name="username" style="height: 30px;"></div>
           <div class="fr but">
               <button type="submit" value="发表" onclick="yanzhen()">发表</button>
               <button type="reset" onclick="div1Reset()">重置</button>
           </div>
       </div>

    </form>
    <br>
    <?php
    $con = mysql_connect("localhost:3306", "root", "root", "znl") or die("连接失败");
    //链接数据库          端口号                  用户名              密码              连接名
    mysql_query("set names utf8", $con);
    mysql_query("set names 'utf8'");
    //数据库输出的编码 应与你的数据库编码一致 建议用utf-8
    mysql_select_db("znl");
    //打开数据库
    //    分页
    $pageSize=6;
    //每页有多少条数据
    $maxRows;
    //最大的条数
    $maxPages;
    //最大的页数
    $page;
    //当前页数
    $page=isset($_GET['page'])?$_GET['page']:1;
    //分页
    $sql="select count(*) count1 from liuyanban";
    //计算多少  建名 值
    $result1=mysql_query($sql);
    //执行sql语句
    $row1=mysql_fetch_array($result1);
    $maxRows=$row1['count1'];
    $maxPages=ceil($maxRows/$pageSize);
    $limit="limit ".($page-1)*$pageSize.",".$pageSize;
    //     limit 从*开始取 取几条数据

    $sql = "select * from liuyanban order by id desc $limit";
    //sql语句
    $result = mysql_query($sql, $con);
    //查询
    $i = 1;

    //    循环
    while ($row = mysql_fetch_array($result)) {
        echo "<div class='me'>";
        echo "<p>" . "<b>姓名:</b>" . $row['name'] . "<span>" . $i++ . "楼" . "</span>" . "</p>";
        echo "<p>" . "对你说:" . "</p>";
        echo "<p>" . "<strong>" . $row['content'] . "</strong>" . "<span>" . $row['date'] . "</span>" . "</p>";
        echo "<p><a href='javascript:void(0);' onclick='del($row[id])' >删除留言</a></p>";
//            这里表示这/个链接不做跳转动作，执行onClick事件。
        //        Javascript中void是一个操作符，该操作符指定要计算一个表达式但是不返回值。
        echo "</div>";

    }
    mysql_close($con);
    //执行后删除
    ?>
<!--    分页-->
    <div>
        <p>当前是第<?php echo $page;?>页 共有<?php echo $maxPages;?>页，共有 <?php echo $maxRows;?>条数据</p>
        <a href="index.php?page=1">首页</a>
        <a href="index.php?page=<?php echo $page-1;?>">上一页</a>
        <a href="index.php?page=<?php echo $page+1;?>">下一页</a>
        <a href="index.php?page=<?php echo $maxPages;?>">末页</a>
    </div>
    <script>
        function yanzhen() {
            if (username.value !== "") {
                window.location.href = "addAction.php";
            } else {
                alert("姓名与内容不得为空")
            }
        }

        function del(thisIndex) {
            if (confirm("确定删除这条留言吗")) {
                window.location.href = "delAction.php?id=" + thisIndex;
            } else {
                return false;
            }
        }
        //重置
        function div1Reset() {
            we=document.querySelector('w-e-text');
            we.innerHTML='';
        }
    //    赞 点击++
        function spanjia() {
            nub=parseInt(this.lastElementChild.innerHTML);
            alert(nub)
        }
    </script>

    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="wangEditor-3.0.15/release/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E('#div1');
        var $text1 = $('#text1');
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            $text1.val(html)
        };
        editor.create();
        // 初始化 textarea 的值
        $text1.val(editor.txt.html());

        // var editor = new wangEditor('div1');
        // editor.create();

    </script>
</div>
</body>
</html>