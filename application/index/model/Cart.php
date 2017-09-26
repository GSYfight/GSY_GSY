<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25
 * Time: 19:45
 */
namespace app\index\model;
use think\Model;
class Cart extends Model{
    static public function cartList($arr){
        if (!$arr){
            return false;
        }
        $sum=0;
        foreach ($arr as $k=>$v){
            $data[$k]=db('goods')
                ->alias('g')
                ->field('g.goods_id,g.goods_name,p.image_s_url,g.sell_price')
                ->join('image p','g.goods_id=p.goods_id','LEFT')
                ->find($k);
            $data[$k]['goods_num']=$arr[$k]['goods_num'];
            $data[$k]['price_sum']=$arr[$k]['goods_num']*$data[$k]['sell_price'];
            if ($v['selected']==1){
                $sum+=$data[$k]['price_sum'];
            }
        }
        $all=[
            'data'=>$data,
            'sum'=>$sum,
        ];
        return $all;
    }
    static public function delOneGoods($data){
        if (!$data){
            return false;
        }
        //通过用户id和商品id删除购物车商品
        $res=db('cart')->where(['goods_id'=>$data['goods_id'],'member_id'=>$data['member_id']])->delete();
        if (!$res){
            return false;
        }
//        通过用户id查找购物车商品信息,并返回
        $cartData=db('cart')->where(['member_id'=>$data['member_id']])->select();
        if (!$cartData){
            return [
                'cartData'=>$cartData,
                'status'=>'success',
                'msg'=>'购物车空了，请加入商品！'
            ];
        }else{
            return [
                'cartData'=>$cartData,
                'status'=>'error',
                'msg'=>'购物车空了，请加入商品！'
            ];
        }

    }
}