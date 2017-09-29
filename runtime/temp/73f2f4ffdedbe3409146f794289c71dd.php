<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"E:\PHP\GSY\public/../application/index\view\personal\order.html";i:1506569640;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" slick-uniqueid="4">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1300">
    <script charset="utf-8" src="__STATIC__/index/order/v.js"></script>
    <script type="text/javascript" async="" src="__STATIC__/index/order/analytics.js"></script>
    <script src="__STATIC__/index/order/hm.js"></script>
    <script src="__STATIC__/index/order/push.js"></script>
    <script async="" src="__STATIC__/index/order/gtm.js"></script>
    <script src="__STATIC__/index/order/lang.js"></script>
    <style type="text/css" abt="234"></style>
    <link href="__STATIC__/index/order/typical.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/order/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/order/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/order/moo.min.js"></script>
    <script src="__STATIC__/index/order/ui.min.js"></script>
    <script src="__STATIC__/index/order/jquery-1.12.0.min.js"></script>
    <script src="__STATIC__/index/order/common-index.js"></script>
    <title>个人中心_一米市集</title>
    <meta name="keywords" content="个人中心__一米市集">
    <meta name="description" content="个人中心__一米市集">
    <link rel="icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://www.yimishiji.com/public/app/b2c/statics/favicon.ico" type="image/x-icon">
    <link href="__STATIC__/index/order/basic.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/order/lang(1).js"></script>
    <link href="__STATIC__/index/order/bootstrap.min.css" rel="stylesheet" media="screen, projection">
    <link href="__STATIC__/index/order/bootstrap-theme.min.css" rel="stylesheet" media="screen, projection">
    <script src="__STATIC__/index/order/shop.min.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/order/styles-1200.css">
    <link rel="stylesheet" href="__STATIC__/index/order/styles-yimi.css">
    <link rel="stylesheet" href="__STATIC__/index/order/member-1200.css">
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
<div class="container" style="overflow: hidden">
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
                <div class="page-article" >
                    <ul class="nav nav-tabs"  style="margin: 0 0 -530px 0">
                        <li role="presentation" class=" active">
                            <a href="">全部订单</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">预售</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">待付款</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">待发货</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">待收货</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">
                                待评价
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="">已作废</a>
                        </li>
                    </ul>
                    <div id="member_orders" class="member-orders member-mod">
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
                            <?php if($orderData == []): ?>
                            <tbody>
                            <tr class="no-information">
                                <td colspan="6">暂无记录,去农场逛逛看</td>
                            </tr>
                            </tbody>
                            <?php else: foreach($orderData as $val): ?>
                            <tbody class="unfold first">
                            <tr>
                                <!-- 商品编号 -->
                                <td>
                                    <a href=""><?php echo $val['order_id']; ?></a>
                                </td>
                                <td>￥<?php echo $val['total_amount']; ?></td>
                                <td><?php echo date('y-m-d',$val['create_time']); ?></td>
                                <!-- 订单状态 -->
                                <td class="actions">
                                    <?php if($val['status'] == 0): ?>未发货
                                    <?php elseif($val['status'] == 1): ?>配送中
                                    <?php elseif($val['status'] == 1): ?>已完成
                                    <?php else: ?>已取消
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $val['pay_method']; ?></td>
                                <td rowspan="2">
                                    <a href=""
                                       class="btn btn-default btn-xs">查看订单</a>
                                    <a class="btn btn-default btn-xs"
                                       href="">取消订单</a>
                                </td>
                            </tr>
                            <tr class="ac_goods-row">
                                <td colspan="5">
                                </td>
                            </tr>
                            </tbody>
                            <?php endforeach; endif; ?>
                        </table>
                    </div>
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