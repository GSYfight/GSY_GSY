<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 14:01
 */
namespace app\index\controller;
use think\Controller;

class Login extends Controller{
    /*
     * 登录界面
     * */
    public function login(){
        return $this->fetch();
    }
    /*
     * 注册界面
     * */
    public function register(){
        //接受参数
        if(request()->isPost()){
            $repassword=md5(input('repassword'));
            $data = [
                'mobile'=>input('mobile'),
                'password'=>input('password'),
            ];

            //验证
            $validate=validate('Login');
            if(!$validate->scene('register')->check($data)){
                $this->error($validate->getError());
            }
            $data['password']=md5($data['password']);
            //如果两次密码不一致，返回注册界面
            if($repassword!=$data['password']){
                $this->error('两次密码不一致',url('Login/register'));
            }
            //生成注册时间
            $data['login_time']=time();
            //生成注册ip
            $data['ip']=$_SERVER["REMOTE_ADDR"];
            var_dump($data['ip']);exit;
            //调用model方法，将$data添加到member表中

        }


        return $this->fetch();
    }
}