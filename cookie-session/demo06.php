<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!--
打开服务器。打开php.in  搜索session.save  查看当前的session的保存路径
cookie 是保存在客户端的文件
session 是保存在服务器的文件
setcookie(简明 id 时效 路径)
setcookie()

-->
<?php

$getString = $_SERVER['QUERY_STRING'];
// echo $getString;
	if(!empty($getString)){
	    if($_GET['flag']=="destory"){
	        unset($_SESSION);
	        session_destroy(); 
   		    header('Location: demo06.php');
	  	}
	}
   if(!empty($_POST)){
   	if($_POST['flag']=="sub"){
   		$_SESSION['username']=$_POST['nameN'];
   		header('Location: main.php');

   	}
   }
  if(!empty($_SESSION)){
  	echo "您已登录";
  	echo "<a href='demo06.php?flag=destory'>注销</a>";
  }else{
  	echo "<form action='demo06.php' method='post'>
		<p>用户名：<input type='text' name='username'></p>
		<p>密  码：<input type='password' name='userpassword'></p>
		<input style='display:none' name='flag' value='sub'>
		<button type='submit'>登录</button>
	</form>";
  }
?>
	
</body>
</html>