<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\PHPfile\GSY\public/../application/index\view\productlist\productlist.html";i:1506319849;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类_四时菜蔬_一米市集</title>
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/./css/products.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('widget/header'); ?>
    <!--主模块-->
    <div class="main">
        <div class="head">
            <div class="left fl">
                <img src="__STATIC__/index/./img/pro_1.jpg" alt="">
            </div>
            <div class="center fl">
                <div class="window">
                    <div class="pic">
                        <a href="#"><img src="__STATIC__/index/./img/pro_w_1.jpg" alt="" class="active"></a>
                        <a href="#"> <img src="__STATIC__/index/./img/pro_w_2.jpg" alt=""></a>
                        <a href="#"><img src="__STATIC__/index/./img/pro_w_3.jpg" alt=""></a>
                        <a href="#"><img src="__STATIC__/index/./img/pro_w_4.jpg" alt=""></a>
                        <a href="#"> <img src="__STATIC__/index/./img/pro_w_5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="bottom">
                    <ol>
                        <li><a href="#" class="active">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                    </ol>
                </div>
            </div>
            <div class="right fr">
                <div class="d1">
                    <a href="#"><img src="__STATIC__/index/./img/pro_r1.jpg" alt=""></a>
                </div>
                <div class="d2">
                    <a href="#"><img src="__STATIC__/index/./img/pro_r2.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="body divModel">
            <div class="left fl">
                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>分类</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <?php foreach($cateData as $v): ?>
                                <li><a href="#"><label><input class="cateName" type="checkbox" value="<?php echo $v['cate_id']; ?>" onclick="checkboxOnclick(this)"><span><?php echo $v['name']; ?></span></label></a></li>
                                <?php endforeach; ?>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="fr opData">
                        <div class="title">
                            <h4>价格范围</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li>1</li>
                                <li>2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>农场&品牌</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <?php foreach($keywordsData as $k=>$v): if($k > 10): ?>
                                <li><a href="#"><label><input class="keywords" type="checkbox" value="<?php echo $v['keywords']; ?>"><span><?php echo $v['keywords']; ?></span></label></a></li>
                                <?php endif; endforeach; ?>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>做个选择</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li><a href="#"><label><input type="checkbox"><span>可持续发展</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>小农栽种</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>天然无毒</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>本地食材</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>一米亲访</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>古法手作</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>无负面添加</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>自然农法</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>优质产地</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>无麸质</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>纯天然原料</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>非转基因</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>有机生产</span></label></a></li>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right fr">
                <div class="head">
                    <div class="pro_count fl">
                        共 <span>97</span> 件
                    </div>
                    <div class="btn fr ">价格</div>
                    <div class="btn fr">购买</div>
                    <div class="btn fr">评价</div>
                    <div class="btn fr strongTag">综合</div>
                </div>
                <div class="body">
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
                    <?php foreach($goodsData['data'] as $v): ?>
                    <div class="modelI fl">
                        <dl>
                            <dd>
                                <img src="<?php echo $v['image_url']; ?>" alt="" class="goodsImg">
                                <div class="youhuiDiv">
                                    <!--<img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">-->
                                </div>
                                <div class="numDiv">
                                    <span>0</span>
                                    <button class="reduceBtn">-</button>
                                    <button class="addBtn">+</button>
                                </div>
                            </dd>
                            <dt>
                            <h4><a href=""><?php echo $v['goods_name']; ?></a></h4>
                            <p>
                                <button><?php echo $v['keywords']; ?></button>
                                <span class="likeP"><?php echo $v['sell_price']; ?></span><?php echo $v['unit']; ?>
                            </p>
                            <p class="money">￥<span class="money">25.00</span></p>
                            </dt>
                        </dl>
                    </div><!--1-->
                    <?php endforeach; ?>
                </div>
                <div class="foot fc">
                   <?php echo $goodsData['page']; ?>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
    <?php echo widget('widget/footer'); ?>
</div>
<!--底部-->
<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>
</body>
<script>
    function checkboxOnclick(checkbox){

        if ( checkbox.checked == true){
            var cate=checkbox.value;
            alert('id:'+cate);
            $.ajax({
                type:'POST',
                dataType:'json',
                url:"<?php echo url('ProductList/index'); ?>",
                data:{keywords:phone},
                success:function (d) {
                    alert(d.msg);
                }
            });



        }else{

//Action for not checked

        }

    }


</script>
<script>
    <!--轮播图-->
    index = 1;
    picWidth = $('.center .window img').width();
    picNum = $('.center .window img').size();
    $('.center .window').width(picWidth * picNum);
    function goIndex() {
        goInterval = setInterval(function () {
            $('.center .window img.active').removeClass('active');
            $('.center .bottom a.active').removeClass('active');

            $('.center .bottom a').eq(index).addClass('active');
            $('.center .window img').eq(index).addClass('active');
            index++;
            if (index > 4) {
                clearInterval(goInterval);
                index = 0;
                goIndex();
            }
        }, 3000);
    }
    goIndex();
    $('.center .bottom a').click(function () {
        index = $(this).index('.center .bottom a');
    });
    //显示隐藏
    $('.opBtn').attr('isOpen','1');
    $('.opBtn').click(function () {
        $(this).next().find('.seclectDiv').toggle();
        if($(this).attr('isOpen') == 1){
            $(this).css({'background-size':'8px','background-repeat':'no-repeat','background-image':'url(__STATIC__/index/./img/pro_close.png)'});
            $(this).attr('isOpen',0);
        }else{
            $(this).css({'background-size':'12px','background-image':'url(__STATIC__/index/./img/pro_open.png)'});
            $(this).attr('isOpen',1);
        }
    });
    //左侧选择框位置
    //    $(window).scroll(function () {
    //        hei = $('.main .body .left').height();
    //        scroHei = $(window).scrollTop();
    //        allH = $(document).height();
    //        if(topH > allH - 870 ){
    //            topH2 = allH - 870 - hei;
    //            $('.main .body .left').css({'top': topH2 + 'px'});
    //
    //        }else if(scroHei >= hei-450){
    //            topH = scroHei - hei +450;
    //            $('.main .body .left').css({'top': topH + 'px'});
    //        }
    //    });

    //    右侧排序
    $('.main .body .right .head .btn').not($('.main .body .right .head .btn').eq(3)).attr('up','0');
    $('.main .body .right .head .btn').click(function () {

        if($(this).hasClass('strongTag') && $(this).attr('up') == 0){
            if ($(this).index('.main .body .right .head .btn') == 3){
            }else{
                $(this).css({'background':'url(__STATIC__/index/./img/icon_sortAroow_up.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
                $(this).attr('up',1);
                $('.main .body .right .head .btn').not(this).attr('up',0);
                $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
            }

        }else if($(this).hasClass('strongTag') && $(this).attr('up') == 1){
            $(this).css({'background':'url(__STATIC__/index/./img/icon_sortAroow_down.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
            $(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
        }else {
            $('.main .body .right .head .btn').not(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
            $('.main .body .right .head .btn').removeClass('strongTag');
            $(this).addClass('strongTag');
            $(this).css({'background':'url(__STATIC__/index/./img/icon_sortAroow_down.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
            $(this).attr('up',0);
        }
    });

</script>
</html>