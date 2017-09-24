<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\PHPfile\GSY\public/../application/index\view\index\index.html";i:1506222048;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一米市集Yimishiji|跟友善农夫，买一份诚食</title>
    <!--1.11.1-->
    <script src="__STATIC__/index/./js/jquery.min.js"></script>
    <script src="__STATIC__/index/./js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/./css/index.css">
    <link rel="icon" href="__STATIC__/index/./img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <?php echo widget('Widget/header'); ?>
    <!--nav-->
    <div class="nav ">
        <div class="navImg">
            <img src=".img/nav1.jpg" alt="717美食5件5折">
        </div>
        <div class="navBtn">
            <ul class="borderD">
                <li>717美食5件5折</li>
                <li>充值返现</li>
                <li>满额立减</li>
                <li>购物纸袋回收计划</li>
                <li>中伏吃面</li>
            </ul>
        </div>
    </div>
    <!--新鲜上市-->
    <div class="div1 borderD">
        <ul>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/lanmei.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">蓝莓新鲜上市</a></h4>
                    <p>安心又美味的新鲜蓝莓到货了！遵照 GAP 「良好农业规范」生态种植，不打药不催熟，采茶工人戴手套采摘，清水冲冲就可食。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/lanmei.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">蓝莓新鲜上市</a></h4>
                    <p>安心又美味的新鲜蓝莓到货了！遵照 GAP 「良好农业规范」生态种植，不打药不催熟，采茶工人戴手套采摘，清水冲冲就可食。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/lanmei.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">蓝莓新鲜上市</a></h4>
                    <p>安心又美味的新鲜蓝莓到货了！遵照 GAP 「良好农业规范」生态种植，不打药不催熟，采茶工人戴手套采摘，清水冲冲就可食。</p>
                    </dt>
                </dl>
            </li>
            <li>
                <dl>
                    <dd><img src="__STATIC__/index/./img/lanmei.jpg" alt=""></dd>
                    <dt>
                    <h4><a href="#">蓝莓新鲜上市</a></h4>
                    <p>安心又美味的新鲜蓝莓到货了！遵照 GAP 「良好农业规范」生态种植，不打药不催熟，采茶工人戴手套采摘，清水冲冲就可食。</p>
                    </dt>
                </dl>
            </li>
        </ul>
    </div>
    <!--热购商品-->
    <div class="regou borderD divModel">
        <div class="regouLeft fl">
            <img src="__STATIC__/index/./img/regou.jpg" alt="" class="fl hImg">
            <div class="regou1 fl">
                <span class="numSpan">1</span>
                <dl>
                    <dd>
                        <img src="__STATIC__/index/./img/putao.jpg" alt="" class="goodsImg">
                        <img src="__STATIC__/index/./img/new.png" alt="" class="youhuiImg">
                        <div class="numDiv" id="firNumDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">原农公社</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div>

        </div>

        <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 69): ?>
        <div class="regouRight fl">
            <div class="regouR fl">
                <span class=""></span>
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
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
                    <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                    <p>
                        <button><?php echo $val['keywords']; ?></button>
                        <span class="likeP"><?php echo $val['unit']; ?></span>
                    </p>
                    <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--2-->
        </div>
        <?php endif; endforeach; endforeach; ?>

    </div>
    <!--新到尖货-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/xindaojianhuo.jpg" alt=""></a>
            <a href="#"><h4>更多新到尖货 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 44): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--安全水果-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/anquanshuiguo.jpg" alt=""></a>
            <a href="#"><h4>更多安全水果 >></h4></a>
        </div>

        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 11): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                    <p>
                        <button><?php echo $val['keywords']; ?></button>
                        <span class="likeP"><?php echo $val['unit']; ?></span>
                    </p>
                    <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>

    </div>
    <!--四时菜蔬-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/sishishishu.jpg" alt=""></a>
            <a href="#"><h4>更多四时菜蔬 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 1): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>

        </div>
    <!--肉禽蛋品-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/rouqindanpin.jpg" alt=""></a>
            <a href="#"><h4>更多肉禽蛋品 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 19): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--粮油酱醋-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/liangyoujiangchu.jpg" alt=""></a>
            <a href="#"><h4>更多粮油酱醋 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 61): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--水中鲜物-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/shuizhongxianwu.jpg" alt=""></a>
            <a href="#"><h4>更多水中鲜物 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 33): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--零食酒饮-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/lingshijiuyin.jpg" alt=""></a>
            <a href="#"><h4>更多零食酒饮 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 51): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--面点小食-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/miandianxiaoshi.jpg" alt=""></a>
            <a href="#"><h4>更多面点小食 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 39): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
    <!--乳制品类-->
    <div class="divModel ">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/./img/ruzhidoupin.jpg" alt=""></a>
            <a href="#"><h4>更多乳制品类 >></h4></a>
        </div>
        <div class="right fl">
            <?php foreach($data as $v): foreach($v as $val): if($val['pid'] == 26): ?>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="<?php echo $val['image_b_url']; ?>" alt="" class="goodsImg">
                        <div class="youhuiDiv"></div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                        <h4><a href=""><?php echo $val['goods_name']; ?></a></h4>
                        <p>
                            <button><?php echo $val['keywords']; ?></button>
                            <span class="likeP"><?php echo $val['unit']; ?></span>
                        </p>
                        <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div>
            <?php endif; endforeach; endforeach; ?>
        </div>
    </div>
</div>
<!--做个选择-->
<div class="chioseBg fc">
    <div class="chiose fc">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/zuogexuanze.jpg" alt="">
        </div>
        <div class="data fl">
            <p>
                每一口放进嘴里的食物，从哪里来、如何耕种与饲养、如何采摘与包装等都会影响生态环境的可持续性。一米市集倡导有意念的吃，希望每个人都能关心食物的来历，在进食之前，想一想这些食物从产地搬到餐桌的一路上经历了什么，然后做个选择。</p>
        </div>
        <div class="menu fl">
            <div class="icon">
                <img src="__STATIC__/index/./img/icon1.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>小农栽种</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/./img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>

        </div>
    </div>
</div>
<!--主要内容-->
<div class="container fc">
    <!--厨房格言-->
    <div class="kitchen borderT">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/chufanggeyan.jpg" alt="">
        </div>
        <div class="contain fl">
            <div class="d1 fl">
                <img src="__STATIC__/index/./img/yu.jpg" alt="">
            </div>
            <div class="d2 fl">
                <h3>三文鱼冰鲜出击</h3>
                <p>
                    鲜艳的橙色，厚身的质地，层层叠叠的纹理，即使是静静地躺在浅浅的瓷盘里，三文鱼也发出诱惑的光芒，在喜爱它的人眼中，钻石切面的光辉也不过如此；用筷子夹起一块放入口中，鱼的极鮮美味也大抵如此。
                    <a href="">阅读更多...</a>
                </p>
            </div>
            <div class="d3 fc divModel">
                <div class="right fl">
                    <dl class="fl cook">
                    <dd>
                        <img src="__STATIC__/index/./img/nangua.jpg" alt="" class="goodsImg">
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
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/nangua.jpg" alt="" class="goodsImg">
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
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/nangua.jpg" alt="" class="goodsImg">
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
                    <dl class="fl cook">
                        <dd>
                            <img src="__STATIC__/index/./img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
            </div>
        </div>
        <!--右侧商品列表-->
        <div class="rightList">
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/xiariliangcai.jpg" alt="">
                <span>夏日凉菜</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/./img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
        </div>
    </div>
    <!--食物记事-->
    <div class="borderT food fc">
        <div class="logo fl">
            <img src="__STATIC__/index/./img/shiwujishi.jpg" alt="">
        </div>
        <div class="d1 fl">
            <img src="__STATIC__/index/./img/foodImg1.jpg" alt="">
            <h4><a href="">食物潮流</a></h4>
            <p>过去几年发生的多起食安危机、历史古都拒绝麦当劳进驻的抗议事件、3D打样餐点的出现，慢慢地在人们的心里发酵，新进而来的思潮在食物体系里掀起了一阵旋风。</p>
        </div>
        <div class="d2 fl">
            <img src="__STATIC__/index/./img/foodImg2.jpg" alt="">
            <h4><a href="">我们真的需要感谢这只小虫</a></h4>
            <p>没错，是蜜蜂。感谢它，不仅是因为它酿出的蜂蜜，也不仅因为它天生勤劳的品性，而是因为它无与伦比的重要性。是感恩，也是警醒，因为这只小虫深陷困境，而它们的困境也会成为人类的困境。</p>
        </div>
        <div class="d2 fr">
            <img src="__STATIC__/index/./img/foofImg3.jpg" alt="">
            <h4><a href="">我们为什么决定下架蓝鳍金枪鱼？</a></h4>
            <p>10月14日，一米市集上架蓝鳍金枪鱼；11月6日，用户建议一米市集下架蓝鳍金枪鱼；11月11日，一米市集下架蓝鳍金枪鱼。</p>
        </div>

    </div>
</div>
<!--底部-->
<?php echo widget('Widget/footer'); ?>
<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>
</body>
</html>