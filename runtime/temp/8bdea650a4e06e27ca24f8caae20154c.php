<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"F:\php\GSY\public/../application/index\view\cart\cart.html";i:1506398432;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车_一米市集</title>
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
    <?php echo widget("widget/header"); ?>
    <!--主模块-->
    <!--购物车为空时-->

    <!--购物车非空时-->
    <div class="cart-section section cart-has">
        <div class="head">
            <div class="cart-icon">
                <h1>
                    <img src="__STATIC__/index/./img/ym_icon_cart.png" alt="">
                    购物车
                </h1>
            </div>
            <div class="liucheng fr">
                <div class="cartBtn fl active">
                    <a href="">1 购物篮</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="checkoutBtn fl">
                    <a href="">2 结账</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="cashierBtn fl">
                    <a href="">3 收银台</a>
                </div>
            </div>
        </div>
        <div class="data">
            <table>
                <tr class="tr1">
                    <td class="cb">
                        <input type="checkbox" name="" checked="checked" class="chk chk_all">
                    </td>
                    <td class="sp">商品</td>
                    <td class="sj">售价</td>
                    <td class="sl">数量</td>
                    <td class="xj">小计</td>
                    <td class="cz">操作</td>
                </tr>
                <?php foreach($data as $v): ?>
                <tr>
                    <td class="cb">
                        <input type="checkbox" name="" checked="checked" class="chk">
                    </td>
                    <td class="sp">
                        <img src="<?php echo $v['image_s_url']; ?>" alt="<?php echo $v['goods_name']; ?>" onclick="javascript:window.location.href='<?php echo url('Product/index',['goodsId'=>$v['goods_id']]); ?>'">
                        <span><a href="<?php echo url('Product/index',['goodsId'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></span>
                    </td>
                    <td class="sj">
                        ￥<span><?php echo $v['sell_price']; ?></span>
                    </td>
                    <td class="sl">
                        <div class="d1">
                            <span class="fl left">-</span>
                            <input type="text" class="fl" maxlength="3" value="<?php echo $v['goods_num']; ?>">
                            <span class="fl right">+</span>
                        </div>
                    </td>
                    <td class="xj">
                        ￥<span><?php echo $v['price_sum']; ?></span>
                    </td>
                    <td class="cz">
                        <a href="#" class="delOneGoods" goodsid="<?php echo $v['goods_id']; ?>">&times;</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr class="end">
                    <td colspan="2">
                        <button>清空购物车</button>
                        <button>删除勾选</button>
                    </td>
                    <td colspan="4">
                        <div class="allDiv fl">
                            <p class="p1">订单金额</p>
                            <p class="p2">￥<span class="allMoney"><?php echo $sum; ?></span></p>
                            <p class="p3">不含运费</p>
                        </div>
                        <button id="jiesuan" class="fl">提交订单</button>
                    </td>
                </tr>
            </table>
            <div class="bottomDiv">
                <div class="mingxi fr">
                    <h2>金额明细</h2>
                    <ul>
                        <li class="li1"><span class="left">商品小计</span><span class="right">￥<span class="allMoney"><?php echo $sum; ?></span></span></li>
                        <li class="li2"><hr></li>
                        <li class="li3"><span class="left ">购买金额</span><span class="right">￥<span class="allMoney"><?php echo $sum; ?></span></span></li>
                        <li><span class="left">可得积分</span><span class="right"><span class="allMoney"><?php echo $sum; ?></span>点</span></li>
                    </ul>
                    <button class="btn1">查看优惠详情</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--底部-->
<?php echo widget("widget/footer"); ?>
<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>
</body>
<script>
    $(".delOneGoods").click(function () {
        var goods_id=$(this).attr('goodsid');
        $.ajax({
            type:"POST",
            datatype:"json",
            data:{goods_id:goods_id},
            url:"<?php echo url('Cart/del'); ?>",
            success:function (data) {
                if(data.status=='success'){
                    location.href="<?php echo url('Cart/index'); ?>"
                }else {

                }
            },



        })
    })

</script>
</html>