<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/24
 * Time: 20:32
 */
namespace app\index\model;
use think\Model;
class Product extends Model{
    static public function search($goodsId){
        $data=db('goods')
            ->alias('g')
            ->join('image i', 'g.goods_id=i.goods_id', 'left')
            ->order('i.is_face')
            ->where(['g.goods_id'=>$goodsId])
            ->select();
        return $data;
    }

}