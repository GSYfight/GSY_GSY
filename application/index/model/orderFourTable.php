<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/27
 * Time: 15:28
 */
namespace app\index\model;
use think\Model;
use think\db;

class orderFourTable extends Model{
    static public function findByOrderId($order_id){
        if(empty($order_id)){
            return false;
        }
        return $res = db('order')->find($order_id);
    }
    /*
     * 提交订单
     * */
    static public function submitOrder($order,$items,$goods,$cart){
        // 启动事务

        Db::startTrans();
        try{
           db('order')->insert($order);//添加订单数据
           db('items')->insertAll($items);//添加订单详情数据
            foreach ($goods as $k=>$v){
                db('goods')->where('goods_id',$k)->setInc('freez',$v['goods_num']);
            }
            db('cart')->where(array('cart_id'=>array('IN',$cart)))->delete();
            // 提交事务
            Db::commit();
            return true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return false;
        }
    }
}