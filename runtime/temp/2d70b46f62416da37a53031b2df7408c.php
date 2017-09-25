<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"E:\PHP\GSY\public/../application/index\view\login\login.html";i:1506323670;s:62:"E:\PHP\GSY\public/../application/index\view\widget\header.html";i:1506325775;}*/ ?>
<header id="header" class="head">
    <a href="index.html">
        <div class="icon fl"></div>
    </a>
    <div class="headRight fl">
        <ul class="fl">
            <li class="fl ct showBorderL">
                <span class="spanH ">所有商品</span>
                <!--隐藏模块1-->
                <div class="d1">

                    <?php foreach($data as $k=>$v): ?>
                    <div class="culumn fl">
                        <a href="">
                            <div class="hDiv borderD">
                                <img src="<?php echo $v[0]['icon']; ?>" alt="">
                                <p><a href=""><?php echo $k; ?></a></p>
                            </div>
                        </a>
                        <div>
                            <?php foreach($v as $k=>$j): ?>
                            <p><a href="<?php echo url('ProductList/productlist',['cate_id'=>$j['cate_id']]); ?>"><?php echo $j['name']; ?></a></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>'
                </div>
            </li>
            <li class="fl ct borderL">
                <span class="spanH">好事发生</span>
                <!--隐藏模块2-->
                <div class="d2">
                    <button>新到尖货</button>
                    <hr>
                    <button>充值卡</button>
                    <hr>
                    <button>优惠推选</button>
                    <hr>
                    <button>好物预购</button>
                </div>
            </li>
            <li class="fl ct borderL">
                <span class="spanH">吃的主张</span>
                <!--隐藏模块3-->
                <div class="d3">
                    <button>做个选择</button>
                    <hr>
                    <button>农友伙伴</button>
                    <hr>
                    <button>认识我们</button>
                    <hr>
                    <button>食物记事</button>
                    <hr>
                    <button>公益伙伴</button>
                </div>
            </li>
        </ul>
        <!--搜索框-->
        <div class="fl borderD">
            <div class="search fl">
                <input id="searchInput" type="text" class="fl" placeholder="搜索你喜欢的" value="">
                <button id="searchBtn"></button>
            </div>
        </div>
        <div class="fl">
            <!--购物车-->
            <div class="cart fl">
                <div class="cartA"><span id="cartNum">0</span></div>
                <div class="cartDiv">
                    <div class="sanjiaoxing"></div>
                    <div class="cartData">
                        <p>购物篮中空空的喔,慢慢逛，不要忘记带上「食欲」<?php echo $urlAddress; ?></p>
                    </div>
                </div>
            </div>
            <!--用户登录-->
            <div class="user fl">
                <div class="userA "></div>
                <?php if($res == []): ?>
                <div class="useDiv">
                    <div class="sanjiaoxing"></div>
                    <a href="<?php echo url('Login/login',['urlAddress'=>$urlAddress]); ?>">
                        <button>登录</button>
                    </a>
                    <hr>
                    <a href="<?php echo url('Login/register'); ?>">
                        <button>注册</button>
                    </a>
                </div>
                <?php else: ?>
                <div class="useDiv" style="height: auto;width: 200px;left: -100px;">
                    <div class="sanjiaoxing" style="left: 135px;"></div>
                    <div style="text-align: center;background: #ccc">
                        <div><img src="<?php echo $res['pic']; ?>" alt="" style="width: 30px;border-radius: 50%;margin-top: 10px;"></div>
                        <a><?php echo $res['username']; ?></a>
                        <p style="text-align: center;font-size: 12px;">友善会员</p>
                        <a href="">200分</a>
                    </div>
                    <a href="<?php echo url('Login/login',['urlAddress'=>$urlAddress]); ?>">
                        <button style="height: 40px;width: 200px;text-align: center">个人中心</button>
                    </a>
                    <hr>
                    <a href="<?php echo url('Login/register'); ?>">
                        <button style="height: 40px;width: 200px;text-align: center">我的订单</button>
                    </a>
                    <hr>
                    <a href="<?php echo url('Login/register'); ?>">
                        <button style="height: 40px;width: 200px;text-align: center">我的优惠券</button>
                    </a>
                    <hr>
                    <a href="<?php echo url('Login/logout'); ?>" >
                        <button style="height: 40px;width: 200px;text-align: center">退出</button>
                    </a>
                </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
</header>