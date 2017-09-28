<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 16:59
 */

namespace app\index\controller;

use app\index\model\Cart as CartModel;
use app\index\model\orderFourTable;
use think\Controller;

class Cart extends Controller
{
    public function add()
    {
        $member_id = $this->isLogin();
        //接收参数
        $goods_id = input("goods_id");
        $goods_num = input("goods_num");
        $data[$goods_id] = [
            'goods_id' => $goods_id,
            'goods_num' => $goods_num,
            'selected' => 1,
            'member_id' => $member_id,
        ];
        //判断是否登录
        if (!$member_id) {
            //未登录
            //存到cookie
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            if (!empty($cart)) {
                //cookie购物车有商品
                if (array_key_exists($goods_id, $cart)) {
                    //cookie购物车有该商品
                    $cart[$goods_id]['goods_num'] += input('goods_num');
                } else {
                    //cookie购物车没有该商品
                    $cart[$goods_id] = [
                        'goods_id' => input('goods_id'),
                        'goods_num' => input('goods_num'),
                        'selected' => 1,
                    ];
                }
                $str = serialize($cart);
                cookie('cart', $str);
            } else {
                //没有购物车商品
                $str = serialize($data);
                cookie('cart', $str);
            }
//            未登录，获取数据当在购物车点击加减时，获取数据
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            $data = CartModel::cartList($cart);

        } else {
            //                 已登录
            //查询用户的购物车情况  查询结果为二维数组
            $cartData = db('cart')->where(['member_id' => $member_id])->select();
            $arr = [
                'goods_id' => $goods_id,
                'goods_num' => $goods_num,
                'selected' => 1,
                'member_id' => $member_id,
            ];
            //判断该用户购物车表是否有数据
            if (!$cartData) {
                //该用户当购物车表没有数据
                db('cart')->insert($arr);
            } else {
                //该用户购物车表有数据
                //遍历数组，将数值键名改为 goods_id
                foreach ($cartData as $k => $v) {
                    $cartData[$v['goods_id']] = $v;
                }
                //判断商品是否已经存在
                if (array_key_exists($goods_id, $cartData)) {
                    $cartData[$goods_id]['goods_num'] += $goods_num;
                    //更新数据库
                    db('cart')->update($cartData[$goods_id]);
                } else {
                    //插入新数据
                    db('cart')->insert($arr);
                }
            }
            //  已登录，获取数据当在购物车点击加减时，获取数据
            if (!empty(cookie('cart'))) {
                $cookie = unserialize(cookie('cart'));
                cookie('cart', null);
                CartModel::addOrigin($cookie, $member_id);
            }
            $data = CartModel::cartMember($member_id);
        }
        return [
            'data' => $data['data'],
            'sum' => $data['sum'],
            'status' => 'success',
        ];
    }

    public function index()
    {
        //判断是否登录
        $member_id = $this->isLogin();
        if (!$member_id) {
            //用户未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            $data = CartModel::cartList($cart);
        } else {
            //用户登录状态
            if (!empty(cookie('cart'))) {
                $cookie = unserialize(cookie('cart'));
                cookie('cart', null);
                CartModel::addOrigin($cookie, $member_id);
            }
            $data = CartModel::cartMember($member_id);
        }
        $this->assign([
            'data' => $data['data'],
            'sum' => $data['sum'],
        ]);
        return $this->fetch('cart/cart');
    }

    public function del()
    {
        $data = [
            'goods_id' => input('goods_id'),
            'member_id' => $this->isLogin(),
        ];
        //判断用户是否登录
        if ($data['member_id']) {
            //登录状态
            $cartData = CartModel::delOneGoods($data);
        } else {
            //未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            unset($cart[$data['goods_id']]);
            $cookie = serialize($cart);
            cookie('cart', $cookie);
        }
        return [
            'status' => 'success',
        ];
    }
    //判断是否登录
    public function isLogin()
    {
        $member = session('index');
        $member_id = $member['member_id'];
        return $member_id;
    }

     /*
     *提交订单，判断是否已登录
     * */
    public function check(){
        $res =[
            'login'=>'',
        ];
        if(empty(session('index'))){
            $res['login']='no';

        }else{
            $res['login']='yes';
        }
        return JSON($res);
    }
    /*
     * 订单结算页
     * */
    public function checkout(){
        //保存session中的member_id
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询cart数据表中数据
        $res = CartModel::cartMember($member_id);
        $sum_price= $res['sum'];//商品总价
        $freight = 30;//运费
        $price=$sum_price+$freight;//应付金额
        $data =$res['data'];//商品信息
        $country_id=1;
        $province_id=2;
        $city_id=52;
        //获取区域表所有数据
        $province=CartModel::province($country_id);
        $city=CartModel::city($province_id);
        $area=CartModel::area($city_id);
//        dump($province);exit;
        //剔除selected==0的商品
        foreach ($data as $k=>$val){
            if($val['selected']==0){
                unset($data[$k]);
            }
        }
        $count=0;//共买了多少件商品
        foreach ($data as $k=>$v) {
            $count +=$v['goods_num'];
        }
        //变量提交至模板
        $this->assign([
            'data'=>$data,
            'sum_price'=>$sum_price,
            'count'=>$count,
            'price'=>$price,
            'province'=>$province,
            'city'=>$city,
            'area'=>$area,
        ]);
        return $this->fetch();
    }
    //找地区Id
    public function areaId(){
        $area_id=input('province_id');
        $areaData=CartModel::areaId($area_id);
        return json($areaData);
    }
    /*
     * 订单结算结束后，付款页面
     **/
    public function order(){
        //获取当前member_id
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询购物车商品
        $res = CartModel::cartMember($member_id);
        $sum_price= $res['sum'];//商品总价
        $freight = 30;//运费
        $price=$sum_price+$freight;//应付金额
        $data =$res['data'];//商品信息
        //剔除selected==0的商品
        foreach ($data as $k=>$val){
            if($val['selected']==0){
                unset($data[$k]);
            }
        }
        //生成订单数据
        //生成订单号，唯一
        $t=time();
        $tt=date('ymd',$t);
        $ttt=date("His",$t);
        $randNum=rand(10000,99999);
        $order_id=$tt.$ttt.$randNum;
        //判断订单号是否唯一
        $res = orderFourTable::findByOrderId($order_id);
        if($res){
            $t=time();
            $tt=date('ymd',$t);
            $ttt=date("His",$t);
            $randNum=rand(10000,99999);
            $order_id=$tt.$ttt.$randNum;
        }
        $orderData=[
            'order_id'=>$order_id,
            'total_amount'=>$price,//订单总价
            'member_id'=>$member_id,
            'status'=>0,
            'pay_status'=>0,
            'create_time'=>$t,
            'last_modify'=>$t,
        ];
//       添加数据到订单详情表中,商品表中增加冻结库存,生成订单,删除购物车选中商品
//        四条sql语句进行事务操作
       $itemsData=[];//订单所有商品
        $goodsCount=[];//所有商品的good_id
        $cartCount=[];//所有购物车讯中商品的good_id
        foreach ($data as $k=>$v) {
            $itemsData[$k]=[
                'member_id'=>$member_id,
                'goods_id'=>$v['goods_id'],
                'goods_num'=>$v['goods_num'],
                'freight'=>$freight,
                'subtotal'=>$v['price_sum'],
            ];
            $goodsCount[$k]=[
                'goods_id'=>$v['goods_id'],
                'goods_num'=> $v['goods_num'],
            ];
            $cartCount[$k]=$v['cart_id'];
        }
//        var_dump($cartCount);exit;
        $res =  orderFourTable::submitOrder($orderData,$itemsData,$goodsCount,$cartCount);
        if($res){
            $this->assign([
                'order_id'=>$order_id,
                'total_amount'=>$price,
            ]);
            return $this->fetch();
        }else{
            $this->error('订单提交失败');
        }



    }

    /*
     * 改变selected值
     */
    public function checkSelected(){
        $data = [
            'goods_id' => input('goods_id'),
            'member_id' => $this->isLogin(),
        ];
        //判断用户是否登录
        if ($data['member_id']) {
            //登录状态
            $sum = CartModel::checkSelected($data);
        } else {
            //未登录状态
            $cookie = cookie('cart');
            $cart = unserialize($cookie);
            //改变该商品的selected值
            if ($cart[$data['goods_id']]['selected']==1){
                $cart[$data['goods_id']]['selected']=0;
            }else{
                $cart[$data['goods_id']]['selected']=1;
            }
            //计算结果，提取总价
            $all = CartModel::cartList($cart);
            $data=serialize($cart);
            cookie('cart',$data);
            $sum=$all['sum'];
            $sum??0;
        }
        if ($sum!==false){
            //数据更改成功
            return [
                'sum' => $sum,
                'status' => 'success',
            ];
        }else{
            //数据更改不成功
        }
    }
    //购物车输入数量的方法
    public function changeNum(){
        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        $memberId=$this->isLogin();
        $datas=CartModel::changeNum($goods_id,$goods_num,$memberId);
//        用户登录状态
        if($this->isLogin()){
            cookie('cart',serialize($datas));
        }
        return $data=[
          'status'=>'success',
          'data'=>$datas
        ];
    }

}