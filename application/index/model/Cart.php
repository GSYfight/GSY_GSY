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
    //登录状态 通过member_id从购物车表获取商品信息
    static public function cartMember($memberId){
        $sum=0;
        $cartData=db('cart')
            ->alias('c')
            ->join('goods g','g.goods_id=c.goods_id','left')
            ->join('image i','i.goods_id=c.goods_id','left')
            ->field('g.goods_id,g.goods_name,c.goods_num,i.image_s_url,g.sell_price,c.selected')
            ->where(['c.member_id'=>$memberId])
            ->select();
        foreach ($cartData as $k=>$v){
            $cartData[$k]['price_sum']=$cartData[$k]['goods_num']*$cartData[$k]['sell_price'];
            if($cartData[$k]['selected']==1){
                $sum+=$cartData[$k]['price_sum'];
            }
        }
        return [
            'data'=>$cartData,
            'sum'=>$sum,
        ];
    }
    //原本未登录状态的购物车，登陆后放到已登录的购物车中
    static public function addOrigin($data,$member_id){
        foreach ($data as $v){
            $v['member_id']=$member_id;
            $goodsData=db('cart')->where(['goods_id'=>$v['goods_id'],'member_id'=>$member_id])->find();

            if($goodsData){
                $goodsData['goods_num']+=$v['goods_num'];
                db('cart')->update($goodsData);
            }else{
                db('cart')->insert($v);
            }
        }

    }
}