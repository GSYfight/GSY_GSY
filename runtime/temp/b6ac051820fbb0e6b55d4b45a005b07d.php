<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\PHPfile\GSY\public/../application/index\view\login\login.html";i:1506594464;}*/ ?>
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
    <div class="section">
        <div class="left fl">
            <h1 class="borderD">登录</h1>
            <!--登录表单-->
            <form action="<?php echo url('Login/doLogin'); ?>" method="post">
                <p>登录账号<?php echo $fullUrl; ?></p>
                <p><input type="text" placeholder="用户名/邮箱地址/手机号" name="mobile"></p>
                <p>密码</p>
                <p><input type="password" placeholder="填写密码" name="password"></p>
                <input type="hidden" name="fullUrl" value="" id="fullUrl">

                <p>校验码</p>
                <input type="text" placeholder="填写验证码" name="code" id="shortIn">
                <img style="vertical-align: middle" src="<?php echo captcha_src(); ?>" alt="captcha" id="codeImg" onclick="this.src='<?php echo captcha_src(); ?>'"/>
                <span href="" style="font-size: 0.8em">看不清楚?换一个</span>

                <p><label><input type="checkbox" class="checkbox" checked>记住账号</label></p>
                <p><input type="submit" value="登录" class="submit"></p>
                <p><a href="">忘记密码？</a></p>


            </form>
        </div>
        <div class="right fl">
            <div class="bg"></div>
            <div class="regist">
                <p>我不是会员，<a href="<?php echo url('Login/register'); ?>">要加入</a></p>
            </div>
        </div>
    </div>

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