<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/29
 * Time: 14:06
 */
namespace app\index\model;
use think\Model;

class AddressModel extends Model{
    static public function findData($val){
        if(empty($val)){
            return false;
        }
        return $res = db('address')->where(['member_id'=>$val,'is_default'=>1])->select();
    }
}