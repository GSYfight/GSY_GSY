<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/22
 * Time: 10:51
 */
namespace app\index\model;
use think\Model;
class Index extends Model{
    //添加商品的所有数据
    static public function addAll(){
        $data=db('goods')
            ->alias('g')
            ->join('image i','g.goods_id=i.goods_id','LEFT')
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->order('path ,is_face desc')
            ->select();
//        db()->getLastSql();exit;
//        dump($data);exit;
        return $data;
    }
}