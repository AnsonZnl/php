<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form action='main.php' method='post'>
        <label>用户名：</label>
        <input type='text' name='username' >
        <br>
        <label>密码：</label>
        <input type='password' name='qwd' >
        <br>
        <label>性别：</label>
        <input type='text' name='age' >
        <br>
        <button type='button' onclick='cheLongin'>登陆</button>
    </form>
</div>
<script>
    function cheLongin() {
        var un=document.querySelector(".username");
        if(!un.value==''){
            return true
        }else {}
        alert("用户名不能为空");
        return false;
    }
</script>
</body>
</html>