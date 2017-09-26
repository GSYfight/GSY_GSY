<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 16:59
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\Cart as CartModel;
class Cart extends Controller{

    public function add(){
        $member_id=$this->isLogin();
        //接收参数
        $goods_id=input("goods_id");
        $goods_num=input("goods_num");
        $data[$goods_id]=[
            'goods_id'=>$goods_id,
            'goods_num'=>$goods_num,
            'selected'=>1,
            'member_id'=>$member_id,
        ];
        //判断是否登录
        if(!$member_id){
            //未登录
            //存到cookie
            $cookie=cookie('cart');
            $cart=unserialize($cookie);
            if (!empty($cart)){
                if (array_key_exists($goods_id,$cart)){
                    $cart[$goods_id]['goods_num']+=input('goods_num');
                }else{
                    $cart[$goods_id]=[
                        'goods_id'=>input('goods_id'),
                        'goods_num'=>input('goods_num'),
                        'selected'=>1,
                    ];

                }
                $str=serialize($cart);
                cookie('cart',$str);
            }else{
                $str=serialize($data);
                cookie('cart',$str);
            }


        }else{
            //已登录
            //查询用户的购物车情况  查询结果为二维数组
            $cartData=db('cart')->where(['member_id'=>$member_id])->select();
            $arr=[
                'goods_id'=>$goods_id,
                'goods_num'=>$goods_num,
                'selected'=>1,
                'member_id'=>$member_id,
            ];
            //判断该用户购物车表是否有数据
            if(!$cartData){
                //该用户当购物车表没有数据
                db('cart')->insert($arr);
            }
            else{
                //该用户购物车表有数据
                //遍历数组，将数值键名改为 goods_id
                foreach ($cartData as $k=>$v){
                    $cartData[$v['goods_id']]=$v;
                }
                //判断商品是否已经存在
                if(array_key_exists($goods_id,$cartData)){
                    $cartData['goods_id']['goods_num']+=$goods_num;
                    //更新数据库
                    db('cart')->update($cartData[$goods_id]);
                }else{
                    //插入新数据
                    db('cart')->insert($arr );
                }

            }
        }

        return [
            'status'=>'success',
        ];


    }
    public function index(){
        $cookie=cookie('cart');
        $cart=unserialize($cookie);
        $data=CartModel::cartList($cart);
        $this->assign([
            'data'=>$data['data'],
            'sum'=>$data['sum'],
        ]);
        return $this->fetch('cart/cart');
    }
    public function isLogin(){
        $member_id=session('index')['member_id'];
        return $member_id;
    }
}