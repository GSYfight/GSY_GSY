<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\php\GSY\public/../application/index\view\product\product.html";i:1506336862;}*/ ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>有机巨玫瑰葡萄_一米市集</title>
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
    <link rel="stylesheet" href="__STATIC__/index/./css/product.css">
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('Widget/header'); ?>
    <!--主模块-->
    <div class="main">
        <div class="row">

            <div class="fl current">
                <?php foreach($data as $val): ?>
                <a href="#" imgid='<?php echo $val['image_id']; ?>' class="sp" style="background-image: url(<?php echo $val['image_m_url']; ?>)"></a>
                <?php endforeach; ?>
            </div>
            <div class="sp_large">
                <div class="cenTop">
                    <a href="#" class="sp_current_img">
                        <img src="" >
                    </a>
                </div>
                <div class="col">
                    <a href="#"><span class="col_a"></span></a>
                    <div class="jq1">
                        <div class="col_div">
                            <div class="share">
                                <a href="#" class="qzone sg">QQ空间
                                </a>
                                <a href="#" class="sina sg">新浪微博
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right fr" style="z-index: 100">
                <div class="title">
                    <p><?php echo $data[0]['keywords']; ?></p>
                    <p class="spName"><?php echo $data[0]['goods_name']; ?></p>
                    <p class="spJiesao"><?php echo $data[0]['desc']; ?></p>
                    <p class="spPrice">￥ <span><?php echo $data[0]['sell_price']; ?></span></p>
                    <p class="spJianjia">
                        订单满299减40元
                        <span class="fr">!</span>
                    </p>
                    <div class="showJianjiaData">
                        <p>活动规则</p>
                        <p>活动期间，单笔订单满299元，减40元，不累计不叠加，取最高符合条件的计算。</p>
                    </div>
                </div>
                <div class="addCart">
                    <div class="data borderT borderD">
                        <p>
                            <span>规格</span>
                            <span>保存方式</span>
                            <span>保质期</span>
                        </p>
                        <p>
                            <span><?php echo $data[0]['unit']; ?></span>
                            <span>冷藏</span>
                            <span>2天</span>
                        </p>
                    </div>
                    <div class="caozuo">
                        <div class="d1 fl">
                            <a href=""  class="fl left" id="goods_sub">-</a>
                            <input type="text" class="fl" maxlength="2" value="1" goodsid="<?php echo $data[0]['goods_id']; ?>" id="goods_num">
                            <a href="" class="fl right" id="goods_add">+</a>
                        </div>
                        <button id="add_cart" class="fr">加入购物车</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="mainData fr divModel">
            <div class="left fl">
                <div class="d1 fl">
                    <h5>检测报告</h5>
                    <div class="data">

                    </div>
                </div>
                <div class="d1 d2 fr">
                    <h5>做个选择</h5>
                    <div class="data">
                        <a href="#">
                            <img src="__STATIC__/index/./img/pro_d1.jpg" alt="">
                            <span>本地食材</span>
                        </a>
                        <a href="#">
                            <img src="__STATIC__/index/./img/pro_d2.jpg" alt="">
                            <span>非转基因</span>
                        </a>
                        <a href="#">
                            <img src="__STATIC__/index/./img/pro_d3.jpg" alt="">
                            <span>有机生产</span>
                        </a>
                    </div>
                </div>
                <div class="d3 fl">
                    <h5>食材身份证</h5>
                    <div class="data">
                        <p>
                            <span class="h">农耕者</span>
                            <span class="p">心心</span>
                            <span class="h">成长地点</span>
                            <span class="p">上海市奉贤区海湾镇五四公路2600号</span>
                        </p>
                        <p>
                            <span class="h">搬运距离</span>
                            <span class="p">46.87km</span>
                            <span class="h">运输旅程</span>
                            <span class="p">奉贤✈上海</span>
                        </p>
                    </div>
                </div>
                <div class="d3 fl">
                    <h5>尝过这一味</h5>
                    <div class="data">
                        <img src="__STATIC__/index/./img/pro_ma1.jpg" alt="">
                        <img src="__STATIC__/index/./img/pro_ma2.jpg" alt="">
                        <p>巨玫瑰葡萄为紫红色，有浓郁玫瑰香气，口感好且甜度高，因此得名。一口一个巨玫瑰，咬开表皮，玫瑰香气与葡萄的鲜甜滋味涌入口中，是美好的夏天的味道。</p>
                        <img src="__STATIC__/index/./img/pro_ma3.jpg" alt="">
                        <img src="__STATIC__/index/./img/pro_ma4.jpg" alt="">
                        <p>普通的葡萄，因为忌惮农残和化学药品，清洗时总要用盐水、或者小苏打水浸泡，反复清洗果蒂部位后才能安心食用。即使如此，也不会将葡萄皮一起吃下去。心心的葡萄由于是有机种植，种植过程中不使用化学合成的农药和化肥，因此食用时只要用清水冲洗干净就可以直接食用。</p>
                        <img src="__STATIC__/index/./img/pro_ma5.jpg" alt="">
                        <img src="__STATIC__/index/./img/pro_ma6.jpg" alt="">
                        <p>葡萄皮和葡萄籽中含有丰富的营养物质，营养学家建议，吃葡萄最好连皮带籽一起食用。喜爱美容保养的女士肯定知道，葡萄皮和葡萄籽中都含有大量原花青素，是抗氧化抗衰老的巨星，葡萄皮中所含的「白藜芦醇」，对抗癌有益；「单宁」，对抗过敏有效；所以，吃葡萄的时候一定记得不能吐葡萄皮哦。</p>
                        <img src="__STATIC__/index/./img/pro_ma7.jpg" alt="">
                        <p>保存：吃不完的葡萄可以带盒，或用带孔的保鲜袋冷藏存放，保鲜期大约在3-5天，但具体时间视不同葡萄品种而有所不同。</p>
                        <img src="__STATIC__/index/./img/pro_ma8.jpg" alt="">
                        <p>提示：一般人都可食用葡萄，但糖尿病患者应适量。葡萄助消化，容易腹泻的人，吃葡萄后不能立即喝水，否则很容易加剧腹泻症状。</p>
                    </div>
                </div>
                <div class="d3 fl">
                    <h5>食物的背后</h5>
                    <div class="data">
                    <p>心心牌有机葡萄，连续十年获得南京国环有机产品认证中心（OFDC）有机认证。</p>
                    <p>采用有机栽培的心心牌有机葡萄，按照葡萄生长规律自然成熟，保留葡萄原有的纯正风味，农业园区拥有丰富的葡萄品种，葡萄口味有奶油香、玫瑰香、有圆的、手指状的，给消费者全新味觉与视觉的享受。</p>
                    <p>葡萄从有机栽种到后期溯源均由以下四点保证：</p>
                    <p>全部采用设施栽培：所有葡萄全部栽培在塑料钢管大棚中，减少了病虫草害对葡萄的危害。</p>
                    <p>不使用化学合成的农药和肥料：生产过程中严格执行有机食品的生产标准，不使用任何化学合成的农药和肥料，杜绝了目前在食品生产中，对消费者身体健康带来严重威胁的化学农药，和肥料对果品的污染。</p>
                    <p>采用生物、农业、物理等措施综合防治病虫草害：采用生物制剂和冬季深翻，多次清园等农业措施，以及杀虫灯、性诱剂、套袋、防鸟网等物理措施，和生物防治相结合的方式，对病虫草鸟害进行综合整治。</p>
                    <p>可追溯：所有「心心」牌有机葡萄包装上都贴有有机防伪码可以查询是否有机正品，同时市民可以通过手机客户端扫描溯源二维码，了解有机葡萄的整个生产过程。</p>
                    </div>
                <div class="d3 fl">
                    <h5>吃货评论</h5>
                    <div class="data">
                        <p>如果您对本商品有什么评论或经验,欢迎分享!</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="right fr">
                <div class="d1 fl">
                    <h5>农友伙伴</h5>
                    <div class="data">
                        <h4>心心</h4>
                        <p>「心心」牌有机葡萄是上海光明集团旗下的有机葡萄品牌。光明集团五四有限公司是我国南方地区第一家经南京国环有机产品认证中心（OFDC）认证的有机栽培示范基地，集果品研究、生产、示范、休闲、观光为一体的综合型园区，先后被评为上海市优质果品特供基地、上海市安全优质信得过果园。在所有「心心」牌有机葡萄包装上都贴有有机防伪码可以查询是否有机正品，同时市民可以通过手机客户端扫描溯源二维码，了解有机葡萄的整个生产过程。</p>
                        <p>
                            <button class="goNongchang">去农场</button>
                        </p>
                    </div>
                </div>
                <div class="d1 fl">
                    <h5>心心的相关产品</h5>
                    <div class="data">
                        <div class="modelI fl">
                            <dl>
                                <dd>
                                    <img src="__STATIC__/index/./img/putao.jpg" alt="" class="goodsImg">
                                    <div class="youhuiDiv">
                                        <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                                    </div>
                                    <div class="numDiv">
                                        <span>0</span>
                                        <button class="reduceBtn">-</button>
                                        <button class="addBtn">+</button>
                                    </div>
                                </dd>
                                <dt>
                                <h4><a href="">生态种植板栗南瓜</a></h4>
                                <p>
                                    <button>君禾园</button>
                                    <span class="likeP">1250</span>g/份
                                </p>
                                <p class="money">￥<span class="money">25.00</span></p>
                                </dt>
                            </dl>
                        </div><!--1-->
                        <div class="modelI fl">
                            <dl>
                                <dd>
                                    <img src="__STATIC__/index/./img/putao.jpg" alt="" class="goodsImg">
                                    <div class="youhuiDiv">
                                        <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                                    </div>
                                    <div class="numDiv">
                                        <span>0</span>
                                        <button class="reduceBtn">-</button>
                                        <button class="addBtn">+</button>
                                    </div>
                                </dd>
                                <dt>
                                <h4><a href="">生态种植板栗南瓜</a></h4>
                                <p>
                                    <button>君禾园</button>
                                    <span class="likeP">1250</span>g/份
                                </p>
                                <p class="money">￥<span class="money">25.00</span></p>
                                </dt>
                            </dl>
                        </div><!--1-->
                    </div>
                </div>
                <div class="d1 fl">
                    <h5>相关文章</h5>
                    <div class="data">
                    </div>
                </div>
            </div>
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
//    商品数量加减
$(".goods_sub").click(function (e) {
    e=e||window.event;
    e.preventDefault();
    var num=parseInt($(this).siblings(".goods_num").val())-1;
    if(num<=1){
        $(this).css({'cursor':'no-drop'});
        num=0;
    }
    $(this).siblings(".goods_num").val(num);
});
$(".goods_add").click(function (e) {
    e=e||window.event;
    e.preventDefault();
    var num=parseInt($(this).siblings(".goods_num").val());
    $(this).siblings(".goods_num").val(num+1).siblings(".goods_sub").css({'cursor':'pointer'});
});
$("#add_cart").click(function () {
    var goods_id=$("#goods_num").attr('goodsid');
    var goods_num=$("#goods_num").val();
    $.ajax({
        type:"POST",
        datatype:"json",
        data:{goods_id:goods_id,goods_num:goods_num},
        url:"<?php echo url('Cart/add'); ?>",
        success:function (data) {
            if(data.status=='success'){
                location.href="<?php echo url('Cart/index'); ?>"
            }else {

            }
        },



    })
})









    //商品图标选择
    $('.sp').eq(0).css({'opacity': '1'});
    $('.sp_current_img').children().eq(0).attr('src', '<?php echo $data[0]['image_b_url']; ?>');
    $('.sp').mousemove(function () {

        var imgId=$(this).attr('imgid');
        $(this).css({'opacity': '1'});
        $('.sp').not($(this)).css({'opacity': '0.4'});

        $.ajax({
            type:'POST',
            dataType:'json',
            url:"<?php echo url('Product/ajaxImg'); ?>",
            data:{imgId:imgId},
            success:function (d) {
                $('.sp_current_img').children().eq(0).attr('src', d['image_b_url']);
            }
        });

    });
    //显示隐藏分享选择
    $('.jq1').mousemove(function () {
        $(this).children().eq(0).children().eq(0).show();
    }).mouseleave(function () {
        $(this).children().eq(0).children().eq(0).hide();
    });

//    优惠信息
    $('.spJianjia').hover(function () {
        $('.showJianjiaData').toggle();
        $(this).children().eq(0).toggle();
    });
</script>

</html>