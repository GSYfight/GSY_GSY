<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/23
 * Time: 16:36
 */
namespace app\index\model;
use think\Model;
class Widget extends Model{
    static public function getCateByPid(){
        $data=db('cate')->where('pid',0)->select();
        foreach ($data as $k=>$v){
            $arr[$v['name']]=db('cate')->where('pid',$v['cate_id'])->select();
            $arr[$v['name']][0]['icon']="__STATIC__/index/img/".$k.".jpg";
//            $arr[$v['name']]['url']="__STATIC__/index/img/".$k.".jpg";
        }
        return $arr;
    }
}