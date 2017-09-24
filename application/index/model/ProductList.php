<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/24
 * Time: 19:27
 */
namespace app\index\model;
use think\Model;
class ProductList extends Model{
    static public function getGoodsByCateId($cate_id){
        if (!$cate_id){
            return false;
        }
        $data=db('goods')
            ->alias('g')
            ->field('g.goods_id,g.unit,g.recycle,g.goods_name,g.sell_price,g.market_price,g.maketable,g.store,g.freez,g.create_time,
            g.last_time,g.keywords,g.desc,g.unit,g.content,g.status,p.image_url,c.name,a.username')//字段
            ->join('image p','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->join('cate c','g.cate_id=c.cate_id','LEFT')
            ->join('management a','g.last_modify_id=a.user_id','LEFT')
            ->where(['p.is_face'=>1,'g.cate_id'=>$cate_id])
            ->paginate(16);
        $page=$data->render();
        $data=$data->all();
        return [
            'page'=>$page,
            'data'=>$data,
        ];
    }
    static public function keyWordsList(){
        $keywordsData=db('goods')->field('keywords')->group('keywords')->select();
        return $keywordsData;
    }
    static public function cateList($cate_id){
        $data=db('cate')->find($cate_id);
        $cateData=db('cate')->where(['pid'=>$data['pid']])->select();
        return $cateData;
    }
}