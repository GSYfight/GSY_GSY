<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/29
 * Time: 13:38
 */
namespace app\index\controller;
use app\index\model\AreaModel;
use think\Controller;
use app\index\model\AddressModel;

class Address extends Controller{
        public function save(){
            //接受参数
            $member=session("index");
            $member_id=$member['member_id'];
            //查询所有地址
            $addCount = AddressModel::findAddress($member_id);
            //如果地址总数超过7个，提示地址已经达到上限
            if(count($addCount['notDefAdd'])>6){
                return $this->error('地址已达上限');
            }
            //根据省市区id查询对应的值,返回包含对应值的数组
            $province=input('province');
            $city=input('city');
            $zone=input('zone');
            $res = AreaModel::findArea($province,$city,$zone);
            if($zone==NULL){
                $res['zone']['area_name']='市';
            }
            if(request()->isPost()){
                $data = [
                    'member_id'=>$member_id,
                    'province'=>$res['province']['area_name'],
                    'city'=>$res['city']['area_name'],
                    'zone'=>$res['zone']['area_name'],
                    'address'=>input('local'),
                    'create_time'=>time(),
                    'mobile'=>input('phone'),
                    'name'=>input('name'),
                ];
                //查询该用户是否有默认地址
                $findData=AddressModel::findData($member_id);
                if($findData){
                    $data['is_default']=0;
                }else{
                    $data['is_default']=1;
                }
                //将地址添加至地址表中
                $res = AddressModel::add($data);
                if($res){
                    $this->redirect('Cart/checkout');
                }else{
                    $this->error('添加地址失败');
                }
            }
        }


}