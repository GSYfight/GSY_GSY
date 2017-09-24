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
        foreach ($data as $v){
            $arr[$v['name']]=db('cate')->where('pid',$v['cate_id'])->select();
        }
        return $arr;
    }
}