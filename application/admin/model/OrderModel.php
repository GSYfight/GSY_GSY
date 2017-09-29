<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 10:24
 */
namespace app\admin\model;
use think\Model;
class OrderModel extends Model{
//    获取订单列表
    static public function olderList(){
        $orderData=db('order')->paginate(6);
        return $orderData;
    }
    //获取订单信息
    static public function gitOrderById($order_id){
        $orderData=db('order')->find($order_id);
        return $orderData;
    }
    //更新订单信息
    static public function updOrder($data){
        $res=db('order')->update($data);
        return $res!==false?true:false;
    }
    //订单详情
    static public function detail($order_id){
        $data=db('order')
            ->alias('o')//别名
            ->where(['o.order_id'=>$order_id,'i.order_id'=>$order_id])
            ->field('o.order_id,o.member_id,g.goods_name,g.sell_price,i.goods_num,i.subtotal')//字段
            ->join('items i','o.member_id=i.member_id','LEFT')
            ->join('goods g','g.goods_id=i.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->paginate(8);
        $page=$data->render();
        $data=$data->all();
        $arr=db('order')->find($order_id);
        return [
            'freight'=>$arr['freight'],
            'total_amount'=>$arr['total_amount'],
            'page'=>$page,
            'data'=>$data,
        ];
    }
    //更新订单信息
    static public function updDetail($data){
        $dataDetail=db('order')->find($data['order_id']);
        $num=$data['freight']-$dataDetail['freight'];
        $dataDetail['total_amount']+=$num;
        $dataDetail['freight']=$data['freight'];
        $res=db('order')->update($dataDetail);
        return $res!==false?true:false;
    }
    //更改订单状态
    static public function changeOrderStatus($order_id,$status){
        $dataOrder=db('order')->find($order_id);
        $dataOrder['status']=$status;
        $res=db('order')->update($dataOrder);
        return $res!==false?true:false;
    }
}