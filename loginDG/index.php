<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录验证</title>
</head>
<body>
<form action="action.php" method="post">
    用户名：<input name="username" id="username"><br>
    密&nbsp;码：<input name="password" id="password"><br>
    <img id="ImgSrc" src="VerificationCode.php" alt="">
    <a href="javascript:void(0);" onclick="getCode()">看不清</a>
    <br>
    验证码：<input name="code" id="code" onkeyup="checkCode()">
    <br>
    <div id="codeSpan"></div>
    <br>
    <button type="button" onclick="checkForm()">提交</button>
</form>

<script>

    //验证用户密码
    function checkForm() {
        //判断用户名密码是否为空 判断是否符合验证
        var username=document.querySelector("#username");
        var password=document.querySelector("#password");
        var form=document.querySelector("form");
        if(username.value!==""&&password.value!==""){
            form.submit();
            return true;
        }else {
            alert("用户名为空");
            return false
        }
    }
    //切换验证码
    function getCode() {
        imgSrc=document.getElementById("ImgSrc");
        imgSrc.src="VerificationCode.php";
        var codeSpan=document.getElementById("codeSpan");
        var code=document.getElementById("code");
        code.value='';
        codeSpan.innerHTML='';
    }
    //验证验证码
    function checkCode() {
        var code=document.querySelector("#code");
        var xmlhttp;
        if (window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function () {
            if (xmlhttp.readyState==4&&xmlhttp.status==200){
                var codeSpan=document.querySelector("#codeSpan");
                    codeSpan.innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("POST","action.php",true);
        // xmlhttp.setRequestHeader("Content-type","appliction/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("code="+code.value);
    }
</script>
</body>
</html>