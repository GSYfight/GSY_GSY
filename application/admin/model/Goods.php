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
    //获取所有商品数据有分类
    static public function index(){
        $data=db('goods')
            ->alias('g')//别名
            ->order('g.goods_id desc')
            ->field('g.goods_id,g.recycle,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
            g.last_time,g.keywords,g.desc,g.content,g.status,p.image_url,c.name,a.username')//字段
            ->join('image p','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->join('management a','g.last_modify_id=a.user_id','LEFT')
            ->where('p.is_face=1')
            ->paginate(8);
         $page=$data->render();
//        echo db()->getLastSql();
////        $data1=db('goods')->select();
////        dump($data1);
//        exit;
        $data=$data->all();
        $arr=[
            'data'=>$data,
            'page'=>$page,
        ];
        return $arr;
    }
    //获取所有商品数据
    static public function getAllGoods(){
        $data=db('goods')
            ->alias('g')//别名
            ->order('g.goods_id desc')
            ->field('g.goods_id,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
            g.last_time,g.keywords,g.desc,g.content,g.status,p.image_url,c.name,a.username')//字段
            ->join('image p','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->join('management a','g.last_modify_id=a.user_id','LEFT')
            ->where('p.is_face=1')
            ->select();
        return $data;
    }
    //通过id获取商品数据
    static public function getgoodsById($id){
        $data=db('goods')
            ->alias('g')//别名
            ->order('g.goods_id desc')
            ->field('g.goods_id,g.unit,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
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
    //假删除商品，改变商品的是否删除字段
    static public function delGoods($goods_id){
        if (!$goods_id){
            return false;
        }
        $goodsData['recycle']=1;
        $goodsData['goods_id']=$goods_id;
        $res=db('goods')->update($goodsData);
        return $res !==false?true:false;
    }
    //撤销删除商品，改变商品的是否删除字段
    static public function backDelGoods($goods_id){
        if (!$goods_id){
            return false;
        }
        $goodsData['recycle']=0;
        $goodsData['goods_id']=$goods_id;
        $res=db('goods')->update($goodsData);
        return $res !==false?true:false;
    }



}