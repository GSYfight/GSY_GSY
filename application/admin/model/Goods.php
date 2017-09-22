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
        $data=db('goods')
            ->alias('g')//别名
            ->order('g.goods_id desc')
            ->field('g.goods_id,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
            g.last_time,g.keywords,g.desc,g.content,g.status,p.image_url,c.name,a.username')//字段
            ->join('image p','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->join('management a','g.last_modify_id=a.user_id','LEFT')
            ->where('p.is_face=1')
            ->paginate(4);
        $page=$data->render();
        $data=$data->all();
        $arr=[
            'data'=>$data,
            'page'=>$page,
        ];
        return $arr;
    }
    //通过id获取商品数据
    static public function getgoodsById($id){
        $data=db('goods')
            ->alias('g')//别名
            ->order('g.goods_id desc')
            ->field('g.goods_id,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
            g.last_time,g.keywords,g.desc,g.content,g.status,p.image_url,c.name,a.username')//字段
            ->join('image p','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->join('management a','g.last_modify_id=a.user_id','LEFT')
            ->where('p.is_face=1')
            ->find($id);
//        dump($data);
//        exit;
//        $data=db('goods')->find($id);
        return $data;
    }
    //添加商品数据
    static public function addGoods($data){
        if(!$data){
            return false;
        }
        $goods_id=db('goods')->insertGetId($data);
        return $goods_id??false;

    }
    static public function updGoods($data){
        if(!$data){
            return false;
        }
        $res=db('goods')->update($data);
        return $res!==false?true:false;

    }



}