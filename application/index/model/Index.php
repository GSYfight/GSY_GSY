<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/22
 * Time: 10:51
 */

namespace app\index\model;

use think\Model;

class Index extends Model
{
    static public function dataSearch($n){
        $data=db('goods')
        ->alias('g')
        ->join('image i', 'g.goods_id=i.goods_id', 'left')
        ->join('cate c', 'g.cate_id=c.cate_id', 'left')
        ->order('is_face desc,path')
        ->where(['pid' => $n])
        ->limit(8)
        ->select();
        return $data;
}
    //添加商品的所有数据
    static public function addAll()
    {
        $data1 = self::dataSearch(33);
        $data2 = self::dataSearch(11);
        $data3 = self::dataSearch(19);
        $data4 = self::dataSearch(26);
        $data5 = self::dataSearch(39);
        $data6 = self::dataSearch(44);
        $data7 = self::dataSearch(51);
        $data8 = self::dataSearch(61);
        $data9 = self::dataSearch(69);
        $data10 = self::dataSearch(1);

        $data=[
          $data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,
        ];

        return $data;
    }

}