<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"F:\php\GSY\public/../application/index\view\personal\personal.html";i:1506654159;s:62:"F:\php\GSY\public/../application/index\view\widget\header.html";i:1506654159;s:60:"F:\php\GSY\public/../application/index\view\widget\left.html";i:1506654976;}*/ ?>
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
                    <a href="<?php echo url('Personal/address'); ?>" class="">
                        收货地址 </a>
                </li>
            </ul>
        </div>
    </div>
</div>