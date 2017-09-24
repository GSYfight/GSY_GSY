/**
 * Created by lpk on 2017/7/20.
 */

$(function () {

    <!--搜索输入框效果-->
    $('#searchInput').focus(function () {
        if (this.value == '8424')
            this.value = '';
    }).blur(function () {
        if (this.value == '') {
            this.value = '8424';
        } else {
            this.value = this.value;
        }
    });
//nav点击切换
    $i = 1;
    $('.navBtn li').click(function () {
        $i = $('.navBtn li').index($(this)) + 1;
        $src = '/static/index/./img/nav' + $i + '.jpg';
        $(this).parent().parent().prev().children().attr({'src': $src});
        $(this).addClass('borderD');
        $(this).removeClass('liHover');
        $('.navBtn li').not(this).removeClass('borderD');
        $('.navBtn li').not(this).addClass('liHover');

    }).ready(function () {
        $('.navBtn li').eq(0).click();
    });
//nav自动轮播
    setInterval(function () {
        $i++;
        $('.navImg img').fadeTo(1000, 0.8);
        setTimeout(function () {
            if ($i > 5) {
                $i = 1;
            }
            $('.navBtn li').eq($i - 1).click();
        }, 1000);
        $('.navImg img').fadeTo(1000, 1);
    }, 3000);

//    加入购物车效果
    $('.divModel dd').mousemove(function () {//显示
        $(this).children(2).show();
        $(this).children().eq(2).children().eq(1).show();
        $(this).children().eq(2).children().eq(2).show();

        if ($(this).children().eq(2).children().eq(0).html() == '0') {//禁用-
            $(this).children().eq(2).children().eq(1).css({'cursor': 'not-allowed'});
            $(this).children().eq(2).children().eq(1).css({'background': '#9B908A'});
            $(this).children().eq(2).children().eq(1).css({'opacity': '0.6'});
        } else {
            $(this).children().eq(2).children().eq(1).css({'cursor': 'pointer'});
            $(this).children().eq(2).children().eq(1).css({'background': '#8DB39E'});
            $(this).children().eq(2).children().eq(1).css({'opacity': '1'});
        }
    }).mouseleave(function () {//隐藏
        if ($(this).children().eq(2).children().eq(0).html() == '0') {
            $(this).children().eq(2).hide();
            $(this).children().eq(2).children().eq(1).hide();
            $(this).children().eq(2).children().eq(2).hide();
        } else {
            $(this).children().eq(2).children().eq(1).hide();
            $(this).children().eq(2).children().eq(2).hide();
        }
    });
//添加减少
    $('.addBtn').click(function () {
        $num = parseInt($(this).prev().prev().html());
        $(this).prev().prev().html($num + 1);
    });
    $('.reduceBtn').click(function () {
        $num = parseInt($(this).prev().html());
        if ($num == 0) {

        } else {
            $(this).prev().html($num - 1);
        }
    });

//回到顶部按钮
    $('.toTopBtn').click(function () {
        $time = setInterval(function () {
            $top = $(document).scrollTop();
            if ($top > 0) {
                $top -= 100;
                $(document).scrollTop($top);
            } else {
                clearInterval($time);
            }
        }, 10);
    });
    $len = 700;
    $top = 0;

    //回到顶部按钮的显示隐藏设置，头部显示隐藏设置
    //滚动事件
    $(window).scroll(function (){
        if ($top > 0) {
            $preTop = $top;
        } else {
            $preTop = 0;
        }
        $top = $(document).scrollTop();
        if ($top > $len) {
            $('.toTopBtn').show();
        } else {
            $('.toTopBtn').hide();
        }
        //header的显示隐藏
        if ($top > 224) {
            if ($top < $preTop) {//向上滚轮，显示
                $('.top').addClass('topShow');
                $('#header').addClass('headShow').removeClass('head');
                $('#header .headRight').children().eq(1).removeClass('borderD');
            } else if ($top > $preTop) {//向下滚轮，隐藏
                $('.top').removeClass('topShow');
                $('#header').removeClass('headShow').addClass('head');
                $('#header .headRight').children().eq(1).addClass('borderD');
            }
        } else {//隐藏
            $('.top').removeClass('topShow');
            $('#header').removeClass('headShow').addClass('head');
            $('#header .headRight').children().eq(1).addClass('borderD');
        }
    });

//客服按钮
    $('.customerBtn').click(function () {
        alert('没有，快滚');
    });
//header隐藏导航设置
    $('#header .headRight li').mouseenter(function () {
        $(this).children().eq(1).stop().slideDown(200);
    }).mouseleave(function () {
        $(this).children().eq(1).stop().slideUp(200);
    });
    $('.cart').mouseenter(function () {
        $('.cartDiv').show();
    }).mouseleave(function () {
        $('.cartDiv').hide();
    });
    $('.user').mouseenter(function () {
        $('.useDiv').show();
    }).mouseleave(function () {
        $('.useDiv').hide();
    });
    //临时跳转效果
    //购物车
    $('.cart').click(function () {
        location.href = 'cart.html';
    });
    //提交订单
    $('#jiesuan').click(function () {
        location.href = 'cart-checkout.html';
    });
    //订单结算
    $('#tijiaoBtn').click(function () {
        location.href = 'paycenter.html';
    });
});