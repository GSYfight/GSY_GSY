<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/28
 * Time: 10:45
 */
namespace app\index\model;
use think\Model;

class orderModel extends Model{
    /*
     * 根据参数查询数据，第一个参数为查询条件，第二个参数为查询字段
     * */
    static public function selectData($val,$col){
        if(empty($val)||empty($col)){
            return false;
        }
       return $res = db('order')->where($col,$val)->select();
    }
}