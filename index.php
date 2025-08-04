<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,80);
//拼接图片地址
//$picpath = "https://cdn.jsdelivr.net/gh/1718638143/img@master/img/".$num.".png";
$picpath = "https://raw.githubusercontent.com/1718638143/img/refs/heads/master/img/".$num.".png";
//重定位到图片
die(header("Location: $picpath"));
?>