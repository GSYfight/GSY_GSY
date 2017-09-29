<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\PHPfile\GSY\public/../application/index\view\personal\personal.html";i:1506594464;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="4">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1300">
    <script charset="utf-8" src="__STATIC__/index/files/v.js"></script>
    <script type="text/javascript" async="" src="__STATIC__/index/files/analytics.js"></script>
    <script src="__STATIC__/index/files/hm.js"></script>
    <script src="__STATIC__/index/files/push.js"></script>
    <script async="" src="__STATIC__/index/files/gtm.js"></script>
    <script src="__STATIC__/index/files/lang.js"></script>
    <style type="text/css" abt="234"></style>
    <link href="__STATIC__/index/files/typical.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/files/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/files/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/files/moo.min.js"></script>
    <script src="__STATIC__/index/files/ui.min.js"></script>
    <script src="__STATIC__/index/files/jquery-1.12.0.min.js"></script>
    <script src="__STATIC__/index/files/common-index.js"></script>
    <title>个人中心_一米市集</title>
    <meta name="keywords" content="个人中心__一米市集">
    <meta name="description" content="个人中心__一米市集">
    <link rel="icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link href="__STATIC__/index/files/basic.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/files/lang(1).js"></script>
    <link href="__STATIC__/index/files/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/files/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/files/shop.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/files/styles-1200.css">
    <link rel="stylesheet" href="__STATIC__/index/files/styles-yimi.css">
    <link rel="stylesheet" href="__STATIC__/index/files/member-1200.css">
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
                <div class="page-aside">
                    <!-- 会员中心菜单 -->
                    <div id="member_menu" class="member-menu">
                        <div class="member-menu-mod">
                            <h2 class="member-menu-title">交易管理</h2>
                            <ul class="member-menu-list">
                                <li>
                                    <a href="<?php echo url('Personal/order'); ?>" class="">
                                        我的订单 </a>
                                </li>
                            </ul>
                        </div>
                        <div class="member-menu-mod">
                            <h2 class="member-menu-title">评论咨询管理</h2>
                            <ul class="member-menu-list">
                                <li>
                                    <a href="https://www.yimishiji.com/member-orders-comment-1.html" class="">
                                        未评论商品 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-comment.html" class="">
                                        我的评论 </a>
                                </li>
                            </ul>
                        </div>
                        <div class="member-menu-mod">
                            <h2 class="member-menu-title">我的账户</h2>
                            <ul class="member-menu-list">
                                <li>
                                    <a href="https://www.yimishiji.com/member-favorite.html" class="">
                                        我喜欢的 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-notify.html" class="">
                                        到货通知 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-coupon.html" class="">
                                        我的优惠券 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-bought_products.html" class="">
                                        常购商品 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-gift_card.html" class="">
                                        我的充值卡 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/point-point_detail.html" class="">
                                        我的积分 </a>
                                </li>
                            </ul>
                        </div>
                        <div class="member-menu-mod">
                            <h2 class="member-menu-title">个人信息管理</h2>
                            <ul class="member-menu-list">
                                <li>
                                    <a href="<?php echo url('Personal/message'); ?>" class="">
                                        个人信息 </a>
                                </li>
                                <li>
                                    <a href="<?php echo url('Personal/security'); ?>" class="">
                                        安全中心 </a>
                                </li>
                                <li>
                                    <a href="https://www.yimishiji.com/member-receiver.html" class="">
                                        收货地址 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 会员中心主内容区 -->
                <div class="page-article">
                    <!-- 欢迎中心 -->
                    <div id="member_welcome">

                        <div class="ym_accountCenter">

                            <!-- 用户大头与名称 -->
                            <div class="row ac_userProfile">
                                <div class="row">
                                    <!-- <img class='ac_userPhoto' src="../themes/yimi/images/ym_icon_user.png" alt="" href="javascript:void(0);" onclick='write_letter();'> -->
                                    <div class="ac_userPhoto" alt="" href="javascript:void(0);"
                                         onclick="write_letter();"></div>

                                    <!-- 头像上传 -->
                                    <div id="write_admin" class="product-notify spe_photo-notify"
                                         style="padding: 35px;display:none;">
                                        <iframe src="__STATIC__/index/files/saved_resource.html" name="upload"
                                                frameborder="0" class="hide"></iframe>
                                        <form action="https://www.yimishiji.com/member-save.html" method="post"
                                              class="descrip" enctype="multipart/form-data" target="upload">
                                            <ul>
                                                <li class="form-item up_photoimg">
                                                    <label for="" class="form-label">上传头像</label>
                                                    <span class="form-act">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2097154">
                    <input type="file" name="file" id="" accept="image/gif,image/jpg,image/jpeg,image/png">
                  </span>
                                                </li>
                                                <li class="tips_img">
                                                    <span class="font_comm12">建议：头像上传为108x108px的图片,格式：jpg,gif,jpeg,png</span>
                                                </li>
                                                <li class="form-item-normal">
                <span class="form-act">
                  <button type="submit" onclick="tijiao();"
                          class="btn btn-caution"><span><span>保 存</span></span></button>
                </span>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                    <!-- 头像上传 -->
                                </div>

                                <div class="ac_basicInfo">
                                    <p class="ac_accountName">18206021539</p>
                                    <p class="ac_accountLevel">友善会员 </p>
                                    <p class="ac_accountPoint">200分</p>
                                    <!-- <p class='ac_accountDesc'>   <a  class="com_right15" href="https://www.yimishiji.com/point-point_detail.html">查看积分记录 &raquo;</a>    （积分累积到1000可成为金卡会员） </p> -->
                                </div>

                            </div>
                            <!-- 用户大头与名称 -->
                            <!-- 用户资讯表 -->
                            <div class="row ac_infoList">
                                <div class="col-md-6">

                                    <!-- 用户等级 -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>等级</p>
                                        </div>
                                        <div class="col-md-9">
                                            <p>友善会员 <span class="ac_description">（积分累积到1000可成为金卡会员） </span></p>
                                        </div>
                                    </div>
                                    <!-- 用户等级 -->

                                    <!-- 用户等级 -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>积分</p>
                                        </div>
                                        <div class="col-md-9">
                                            <p>
                                                200分
                                                <a class="com_right15"
                                                   href="https://www.yimishiji.com/point-point_detail.html">查看积分记录 »</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 用户等级 -->
                                    <!-- 用户预存款 -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>账户余额</p>
                                        </div>
                                        <div class="col-md-9">
                                            <p>
                                                <!--￥0.00  <a class="com_right15" href="https://www.yimishiji.com/member-deposit.html">预存款充值 &raquo;</a>-->
                                                ￥0.00 <a class="com_right15"
                                                         href="https://www.yimishiji.com/member-gift_card.html">账户余额充值
                                                »</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 用户预存款 -->
                                </div>
                                <div class="col-md-6">
                                    <!-- 订单 -->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>交易提醒</p>
                                        </div>
                                        <div class="col-md-9">
                                            <p>
                                                <a class="item"
                                                   href="https://www.yimishiji.com/member-orders-payment-1.html">未付款订单
                                                    <span class="label-disabled">0</span>
                                                </a>
                                            </p>
                                            <p>
                                                <a class="item"
                                                   href="https://www.yimishiji.com/member-orders-preorder.html"> 预售订单
                                                    <span class="label-alert"></span>
                                                </a>
                                            </p>
                                            <p>
                                                <a class="item" href="https://www.yimishiji.com/member-notify.html">到货通知
                                                    <span class="label-disabled">0</span>
                                                </a>
                                            </p>

                                            <p>
                                                <a class="item" href="https://www.yimishiji.com/member-comment.html">评论回复
                                                    <span class="label-disabled">0</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 订单 -->
                                </div>
                            </div>
                            <!-- 用户资讯表 -->
                        </div>
                    </div>
                    <!-- 最近的订单 -->
                    <div class="ac_sectionHeader">最近的订单
                        <a href="https://www.yimishiji.com/member-orders.html">所有订单 <span
                                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                    <div id="member_orders" class="ac_section">
                        <table class="table ac_table ac_orderTable">
                            <thead>
                            <tr>
                                <th>订单号</th>
                                <th>金额</th>
                                <th>下单时间</th>
                                <th>订单状态</th>
                                <th>支付方式</th>
                                <th>操作</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr class="no-information">
                                <td colspan="6">暂无记录,去农场逛逛看</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <!-- 最近的订单 -->
                </div>
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
</div>

<?php echo widget('Widget/footer'); ?>
</body>
</html>