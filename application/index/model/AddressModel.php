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
    /*
     * 根据member_id查询是否存在默认地址
     * */
    static public function findData($val){
        if(empty($val)){
            return false;
        }
        return $res = db('address')->where(['member_id'=>$val,'is_default'=>1])->select();
    }
    /*
     * 将新增的地址添加至地址表
     * */
    static public function add($data){
        if(empty($data)){
            return false;
        }
        return $res = db('address')->insert($data);
    }
    /*
     * 根据member_id查询所有地址，返回默认地址
     * */
    static public function findAddress($member_id){
        if(empty($member_id)){
            return false;
        }
        //默认地址
        $defAdd = db('address')->where([
            'member_id'=>$member_id,
            'is_default'=>1
        ])->find();
        //非默认地址
        $notDefAdd =db('address')->where([
            'member_id'=>$member_id,
            'is_default'=>0
        ])->select();
        return $res =[
            'defAdd'=>$defAdd,
            'notDefAdd'=>$notDefAdd
        ];
    }
    /*
     * 根据address_id查询地址数据，并返回
     * */
    static public function addressData($val){
        if(empty($val)){
            return false;
        }
        return $res = db('address')->find($val);
    }
}