<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 11:02
 */
namespace app\admin\model;
use think\Model;
class Goods extends Model{
    //获取所有商品数据
    static public function index(){
        $data=db('goods')->order('goods_id desc')->paginate(5);
        return $data;
    }
    static public function getgoodsById($id){
        $data=db('goods')->find($id);
        return $data;
    }
    static public function addGoods($data){

        $goods_id=db('goods')->insertGetId($data);
        return $goods_id??false;

    }


}