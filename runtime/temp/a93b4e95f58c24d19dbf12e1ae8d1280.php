<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"E:\PHP\GSY\public/../application/index\view\personal\email.html";i:1506656083;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="4">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1300">
    <script type="text/javascript" async="" src="__STATIC__/index/message/analytics.js"></script>
    <script charset="utf-8" src="__STATIC__/index/message/v.js"></script>
    <script src="__STATIC__/index/message/hm.js"></script>
    <script src="__STATIC__/index/message/push.js"></script>
    <script async="" src="__STATIC__/index/message/gtm.js"></script>
    <script src="__STATIC__/index/message/lang.js"></script>
    <style type="text/css" abt="234"></style>
    <link href="__STATIC__/index/message/typical.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/message/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/message/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/message/moo.min.js"></script>
    <script src="__STATIC__/index/message/ui.min.js"></script>
    <script src="__STATIC__/index/message/jquery-1.12.0.min.js"></script>
    <script src="__STATIC__/index/message/common-index.js"></script>
    <title>个人中心_一米市集</title>
    <meta name="keywords" content="个人中心__一米市集">
    <meta name="description" content="个人中心__一米市集">
    <link rel="icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link href="__STATIC__/index/message/basic.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/message/lang(1).js"></script>
    <link href="__STATIC__/index/message/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/message/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/message/shop.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/message/styles-1200.css">
    <link rel="stylesheet" href="__STATIC__/index/message/styles-yimi.css">
    <link rel="stylesheet" href="__STATIC__/index/message/member-1200.css">
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/./css/cart.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('Widget/header'); ?>
<div id="container" class="page-container mb-wrap clearfix">
    <div class="inner-wrap">
        <div class="bread-crumbs">
        </div>
        <div id="main" class="clearfix">
            <!-- 左栏 -->
          <?php echo widget('Widget/left'); ?>
            <div class="page-article">
                <div id="member_security" class="member-security">

                    <h3>
                        身份验证 <br>
                        <small>
                        </small>
                    </h3>
                    <hr>

                    <!-- 步骤图 -->
                    <div id="verify_steps" class="steps steps-three">
                        <table>
                            <tbody>
                            <tr>
                                <td class="step-item step-1 active"><span style="color: white;"><q class="icon">P</q><i>1</i>身份验证</span></td>
                                <td class="icon step-arrow">(</td>
                                <td class="step-item step-2"><span><q class="icon">P</q><i>2</i>设置验证信息</span></td>
                                <td class="icon step-arrow">(</td>
                                <td class="step-item step-3"><span><q class="icon">P</q><i>3</i>完成</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-8">

                            <div id="verify_content">
                                <form action="<?php echo url('Login/doVeri'); ?>" method="post">
                                    <input name="forward" type="hidden" value="">
                                    <input type="hidden" name="verifyType" value="verifyemail">

                                    <div class="row ac_securityitem">
                                        <div class="col-md-12 ac_securityTitle">
                                            为保障您的账户安全，请先验证您的身份
                                        </div>
                                    </div>

                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            选择验证方式：
                                        </div>
                                        <div class="col-md-8">
                                            <label for="for_verify_mobile" class="form-sub-label">
                                                <input type="radio" name="send_type" checked="" id="for_verify_mobile" class="action-verify-method" value="mobile">
                                                手机验证
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            校验码：
                                        </div>
                                        <div class="col-md-8">
                                            <input class="x-input form-control sms-verify-input" type="text" name="" placeholder="填写校验码" data-caution="请正确填写校验码" size="4" maxlength="4" style="width:100px" id="dom_el_802ff21" autocomplete="off" vtype="required&amp;&amp;alphaint">
                                            <img src="<?php echo captcha_src(); ?>" alt="验证码" title="点击更换验证码" class="verify-code auto-change-verify-handle" id="codeImg">
                                            <a href="#" class="verify-code auto-change-verify-handle lnklike" id="changeOne">看不清楚?换一个</a>
                                            <script>
                                                $(function () {
                                                    $('#changeOne').click(function () {
                                                        $('#codeImg').attr('src','<?php echo captcha_src(); ?>');
                                                    })
                                                })
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            手机号码：
                                        </div>
                                        <div class="col-md-8">
                                            <input type="hidden" name="mobile" value="13285979173">
                                            <?php echo $memberData['mobile']; ?>
                                            <a href="#" data-mobile="<?php echo $memberData['mobile']; ?>" class="btn btn-default action-get-verifycode" id="sendSms">
                                            获取验证码</a>
                                            <script>
                                                $(function () {
                                                    $('#sendSms').click(function () {
                                                        var mobile=$('#sendSms').attr('data-mobile');
                                                        $.ajax({
                                                            type:'POST',
                                                            dataType:'json',
                                                            url:"<?php echo url('Login/sendCode',['status'=>'email']); ?>",
                                                            data:{mobile:mobile},
                                                            success:function (d) {
                                                                alert(d.msg);
                                                            }
                                                        })
                                                    })
                                                })
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row ac_securityitem">
                                        <div class="col-md-3 ac_securityTitle">
                                            填写验证码：
                                        </div>
                                        <div class="col-md-8">
                                            <input class="x-input form-control" type="text" name="code" id="dom_el_802ff22" vtype="required" size="6" maxlength="6" style="width:100px">                  </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-default" rel="_request" >提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var submit = $j('#member_information button:submit');
                function ajax_callback(type, msg, url) {
                    if (type == 'error') {
                        submit.removeClass('disabled');
                    }
                    return top.Message(msg, type, function () {
                        if (url) location.href = url;
                    });
                }
                function tijiao() {
                    $j('#member_information').submit();
                }
            </script>
        </div>
    </div>
</div>
<div id="im_bar" class="im clearfix" style="top: 300px;">
    <ul>
        <li class="ics online"></li>
        <li class="ics qes"></li>
        <li class="ics opin"></li>
    </ul>
</div>
<div class="to_top"></div>
    <?php echo widget('Widget/footer'); ?>
</div>
</body>
</html>