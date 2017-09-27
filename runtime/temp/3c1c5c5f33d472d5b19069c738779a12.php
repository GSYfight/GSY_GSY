<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\PHP\GSY\public/../application/index\view\login\findpsw.html";i:1506409353;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录_一米市集</title>
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/./css/login.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
   <?php echo widget('Widget/header'); ?>
    <!--主模块-->
    <div>
        <h4 style="margin: 0 auto;width: 933px;font-weight: bold;">找回密码</h4>
    </div>
<!--底部-->
<?php echo widget('Widget/footer'); ?>

<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>


<div class="tishi">
    <span>!</span>用户名或密码错误！
</div>

</body>

</html>