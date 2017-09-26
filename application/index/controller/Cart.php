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
        //接收参数
        $goods_id=input("goods_id");
        $data[$goods_id]=[
            'goods_id'=>input("goods_id"),
            'goods_num'=>input("goods_num"),
            'selected'=>1,
        ];
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
}