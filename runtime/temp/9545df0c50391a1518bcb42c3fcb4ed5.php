<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\php\GSY\public/../application/index\view\personal\message.html";i:1506654159;}*/ ?>
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
            <!-- 会员中心主内容区 -->
            <div class="page-article member-userbox">
                <!-- 个人信息 -->
                <div id="" class="">
                    <div class="ac_menberInfo">
                        <iframe src="__STATIC__/index/message/saved_resource.html" name="upload" frameborder="0"
                                class="hide"></iframe>
                        <form action="https://www.yimishiji.com/member-save_setting.html" method="POST"
                              id="member_information" class="" enctype="multipart/form-data" target="upload">
                            <!-- 个人头像 -->
                            <div style="">
                                <div class="form-group">
                                    <label for="nickname">个人头像<span style="font-size:12px;color:#ddd;margin-left:20px">建议：头像上传为108x108px的图片,格式：jpg,gif,jpeg,png</span></label>
                                    <img class="profile_picture" src="<?php echo $memberData['pic']; ?>" alt=""
                                         href="" onclick="">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2097150" class="upimg_input">
                                    <input type="file" name="file" accept="image/gif,image/jpg,image/jpeg,image/png">
                                </div>
                            </div>
                            <!-- 个人头像 -->
                            <hr>
                            <!--用户名-->
                            <div class="form-group">
                                <label for="nickname">用 户 名</label>
                                <input id="nickname" type="text" class="form-control" name="pam[name]" value="<?php echo $memberData['username']; ?>">
                            </div>
                            <!--用户名-->
                            <!--Email-->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="pam[email]"
                                       placeholder="请去安全中心完善邮箱验证" readonly="readonly" value="">
                            </div>
                            <!--Email-->
                            <!--手机号-->
                            <div class="form-group">
                                <label for="mobile">手机号</label>
                                <input id="mobile" class="form-control" type="text" name="pam[mobile]"
                                        readonly="readonly" value="<?php echo $memberData['mobile']; ?>">
                            </div>
                            <!--手机号-->
                            <!--性别-->
                            <div class="form-group">
                                <label for="">性别</label>
                                <label class="radio-inline" for="man">
                                    <input type="radio" value="1" name="sex" id="man">
                                    男</label>
                                <label class="radio-inline" for="women">
                                    <input type="radio" checked="checked" value="0" name="sex" id="women">
                                    女</label>
                            </div>
                            <!--性别-->
                            <!--QQ-->
                            <div class="form-group">
                                <label for="qq">QQ</label>
                                <input class="x-input form-control" id="qq" type="text" name="qq"></div>
                            <!--QQ-->
                            <!--MSN-->
                            <div class="form-group">
                                <label for="msn">MSN</label>
                                <input class="x-input form-control" id="msn" type="text" name="msn"></div>
                            <!--MSN-->
                            <button type="submit" onclick="tijiao();" class="btn btn-default">保 存</button>
                        </form>
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