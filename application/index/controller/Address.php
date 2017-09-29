<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/29
 * Time: 13:38
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\AddressModel;

class Address extends Controller{
        public function save(){
            //接受参数
//            var_dump(input());
            $member=session("index");
            $member_id=$member['member_id'];
            if(request()->isPost()){
                $data = [
                    'member_id'=>$member_id,
                    'province'=>input('province'),
                    'city'=>input('city'),
                    'zone'=>input('zone'),
                    'address'=>input('local'),
                    'create_time'=>time(),
                ];
                //查询该用户是否有默认地址
                $findData=AddressModel::findData($member_id);
                if(){

                }
            }
        }


}