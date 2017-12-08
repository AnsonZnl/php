<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(empty($_SESSION)||$_SESSION==null){
    echo "<script>alert('登录超时,请重新登录');</script>";
    $url = "demo06.php?flag=destory";
    echo "<script  language='JavaScript'>";
    echo "location.href='".$url."'";
    echo "</script>"; 
   
	}else{
     echo "欢迎用户".$_SESSION['username']."登录系统"; 
	 echo "	<a href='demo06.php?flag=destory'>注销</a>
";
	}
	?>
</body>
</html>