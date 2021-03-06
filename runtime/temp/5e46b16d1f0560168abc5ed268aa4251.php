<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\PHPfile\GSY\public/../application/index\view\login\register.html";i:1506738583;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册_一米市集</title>
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/./css/regist.css">
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
            <h1>会员注册</h1>
            <!--注册表单-->
            <form action="<?php echo url('Login/register'); ?>" method="post">
                <p>
                    <span>手机号</span>
                    <label for="mobile" class="s2"><span class="s1">!</span>请填写正确的手机号</label>
                    <input type="text" placeholder="请填写正确手机号" name="mobile" id="mobile" maxlength="11">
                    <br>

                </p>
                <p>
                    <span>密码</span>
                    <input type="password" placeholder="6-20个字符" name="password" id="password" minlength="6" maxlength="20">
                    <br>
                    <label class="s2" for="password"><span class="s1">!</span>密码长度为6-20字符</label>
                </p>
                <p>
                    <span></span>
                    <span class="mimaqiangdu">密码强度：<span class="mimaqiangduVal"> </span>
                        <span class="mimaqiangduImg1"></span>
                        <span id="mimaqiangduImg"></span>
                    </span>
                </p>
                <p>
                    <span>确认密码</span>
                    <input type="password" placeholder="请再次填写密码" name="repassword">
                    <br>
                    <label class="s2"><span class="s1">!</span>密码与确认密码不相符，请重新填写</label>
                </p>
                <p>
                    <span>验证码</span>
                    <input type="text" placeholder="请填写校验码" name="code" class="shortIn">
                    <img style="vertical-align: middle" src="<?php echo captcha_src(); ?>" alt="captcha" id="codeImg" onclick="this.src='<?php echo captcha_src(); ?>'"/>
                    <a id="changeOne">换张验证码</a>
                    <label class="s2" ><span class="s1">!</span>请输入校验码</label>
                </p>
                <p>
                    <span>验证码</span>
                    <input type="text" placeholder="请填写验证码" name="smsCode" class="shortIn">
                    <a id="smsCode" style="margin-left: 10px;">获取短信验证码</a>
                    <br>
                    <label class="s2"><span class="s1">!</span>本项必填</label>
                </p>
                <p class="tishi">
                    <span> </span>
                    如未收到短信，请联络客服或拨打400-655-1212</p>
                <p>
                    <label>
                        <input type="checkbox" class="checkbox">
                        我已阅读并同意 <a href="">会员注册协议</a> 和 <a href="">隐私保护政策</a>
                    </label>
                </p>
                <p>
                    <input type="submit" value="注册" class="submit">
                </p>
            </form>
        </div>
        <div class="right fl">
            <div class="bg"></div>
        </div>
    </div>

</div>

<!--底部-->
<?php echo widget('Widget/footer'); ?>

<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>

</body>

<script>
    //注册表单验证
//    手机号验证
    $('input[name=mobile]').blur(function () {
        var $phone = this.value;
        if ((!(/^1[3|4|5|8][0-9]\d{4,8}$/.test($phone)))) {
            $(this).next().next().show();
        }else{
            $(this).next().next().hide();
        }
    });
//    密码验证,强度
    $('input[name=password]').keyup(function() {
        var $pw = this.value;
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($pw)) {
            $('.mimaqiangduVal').html('差');
            $('#mimaqiangduImg').css({'width':'0px'});
        } else if (strongRegex.test($pw)) {
            $('.mimaqiangduVal').html('强').css({'color':'#8CB69E'});
            $('#mimaqiangduImg').css({'width':'111px','background':'#8CB69E'});
        } else if (mediumRegex.test($pw)) {
            $('.mimaqiangduVal').html('中').css({'color':'#DACA86'});
            $('#mimaqiangduImg').css({'width':'74px','background':'#DACA86'});
        } else {
            $('.mimaqiangduVal').html('弱').css({'color':'#E88771'});
            $('#mimaqiangduImg').css({'width':'37px','background':'#E88771'});
        }
    }).blur(function () {
        var $pw = this.value;
        if($pw.length < 6 || $pw.length > 20){
            $(this).next().next().show();
        }else {
            $(this).next().next().hide();
        }
    });
//    确认密码
    $('input[name=repassword]').blur(function () {
        var $pw = $('input[name=password]').val();
        var $repw = this.value;
        if($repw != $pw){
            $(this).next().next().show();
        }else {
            $(this).next().next().hide();
        }
    });
//    校验码
    $('input[name=code]').blur(function () {
        var $code = this.value;
        if($code.length < 4){
            $(this).next().next().next().show();
        }else {
            $(this).next().next().next().hide();
        }
    });
//    提交判断，验证码
    $('form').submit(function () {
        $('input[name]').blur();//触发其他判断
        $smsCode  = $('input[name=smsCode]').val();
        if($smsCode.length < 4){
            $('input[name=smsCode]').next().next().next().show();
        }else {
            $('input[name=smsCode]').next().next().next().hide();
        }

        if(!$('.s2').is(':visible')){
            $('form').attr({'action':'a.php'});
        }
    });
    //短信获取验证码
    $('#smsCode').click(function () {
        var mobile=$('input[name=mobile]').val();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:"<?php echo url('Login/sendCode'); ?>",
            data:{mobile:mobile},
            success:function (d) {
                    alert(d.msg);
            }
        })
    });
    //点击更换验证码图片
    $('#changeOne').click(function () {
        $('#codeImg').attr('src','<?php echo captcha_src(); ?>');
    })
</script>
</html>