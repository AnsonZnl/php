<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/1/4
 * Time: 19:10
 */
/*
 * 制作6位的数字+字母的验证码
 * */
//创建宽高
$width=200;
$height=40;
//新建画布
$image=imagecreatetruecolor($width,$height);
//新建矩形白色
$white=imagecolorallocate($image,255,255,255);
//填充一下
imagefilledrectangle($image,0,0,$width,$height,$white);
//封装颜色
function getRandColor($image){
//随机颜色
    return imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
}

//快速创建字符串 $string='asadf132' array_merge 合并成一个数组 join字符串链接数组中的值  赋给string
$string=join('',array_merge(range(0,9),range('a','z'),range('A','Z')));
//echo $string;
//得到字体宽度
$textWidth=imagefontwidth(28);
//得到字体高度
$textHeight=imagefontheight(28);
$length=4;
$strZ='';
for($i=0;$i<$length;$i++){
    //随机每一位颜色
//    $randColor=imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    $randColor=getRandColor($image);
    $size=mt_rand(15,22);
    $angle=mt_rand(-15,15);
//    $x=20+40*$i;
//    $y=30;
    $x=($width/$length)*$i+$textWidth;
    $y=mt_rand($height/2,$height-$textHeight);
    $fontFile='font/FZLTCXHJW.TTF';
    //打乱string这个字符串 然后随机取第一个字符串[0]
    $text=str_shuffle($string)[0];
    $strZ=$strZ.$text;
    imagettftext($image,$size,$angle,$x,$y,$randColor,$fontFile,$text);
}
//
session_start();
$_SESSION["code"]=$strZ;
//添加干扰元素
//添加点，像素做干扰元素
for($i=1;$i<=50;$i++){
    //绘制像素
    imagesetpixel($image,mt_rand(0,$width),mt_rand(0,$height),getRandColor($image));
}
//添加线段干扰
for($i=1;$i<=2;$i++){
    //绘制线段
    imageline($image,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),getRandColor($image));
//                     起始位置          结束位置
}
//绘制圆弧干扰
for($i=1;$i<=1;$i++){
    //绘制圆弧
    imagearc($image,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width/2),mt_rand(0,$height/2),mt_rand(0,360),mt_rand(0,360),getRandColor($image));
}


//告诉浏览器以图像形式显示
header('content-type:image/png');
//输出图像
imagepng($image);
//销毁资源
imagedestroy($image);

/*//绘制像素
 * imagesetpixel();
 * //绘制线段
 * imageline()
 * //绘制圆弧
 * imagearc()
 * 取得字体宽度
 * imagefontwidth()
 * 取得字体高度
 * imagefontheight()
 *
 *
 * */
