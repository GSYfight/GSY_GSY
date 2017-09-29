<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 16:16
 */
namespace app\index\model;
use think\Model;


class LoginModel extends Model{
    /*
     * 将数据添加到member数据库
     * */
    static public function addData($data){
        if(empty($data)){
            return false;
        }
        return $res=db('member')->insert($data);
    }
    /*
     * 根据参数获取member数据第一个参数为查询信息，第二个参数为查询字段
     * */
    static public function dataByMobile($mobile,$col){
        if(empty($mobile)){
            return false;
        }
        return $res=db('member')->where($col,$mobile)->find();
    }
    /*
     * 将数据添加至member数据库
     * */
    static public function loginUpd($data){
        if(!$data){
            return false;
        }
        $id =db('member')->where('mobile',$data['mobile'])->find();

            db('member')->where('member_id',$id['member_id'])->setInc('login_count');
        return db('member')->where('member_id',$id['member_id'])->update($data);

    }
    /*
     * 将验证码存入表中
     * */
    static public function saveCode($data){
        if(empty($data)){
            return false;
        }
        //判断手机号是否曾经发送过验证码
        $dataByMobile =db('code')->where('mobile',$data['mobile'])->find();
        $res=[
          "type"=>'',
          'msg'=>''
        ];
        if($dataByMobile){
            //如果手机曾经发送过验证码，将$data更新
            $msg=db('code')->where('mobile',$data['mobile'])->update($data);
            $res['type']='upd';
            $res['msg']=$msg;
        }else{
            //如果手机从未发送过验证码，将$data添加至数据库
            $msg = db('code')->insert($data);
            $res['type']='add';
            $res['msg']=$msg;
        }
        return $res;
    }
    /*
     * 根据mobile查找code数据
     * */
    static public function codeByMobile($mobile){
        if(empty($mobile)){
            return false;
        }
        return $res = db('code')->where('mobile',$mobile)->find();
    }
}