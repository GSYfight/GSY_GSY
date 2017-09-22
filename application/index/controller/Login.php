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
        $repassword=md5(input('repassword'));
        $data = [
            'mobile'=>input('mobile'),
            'password'=>md5(input('password')),
            'code'=>input('code'),
        ];
        //验证
        $validate=validate('Login');
        if(!$validate->scene('register')->check($data)){
            $this->error($validate->getError());
        }
        //如果两次密码不一致，返回注册界面
        if($repassword!=$data['password']){
            $this->error('两次密码不一致',url('Login/register'));
        }

        return $this->fetch();
    }
}