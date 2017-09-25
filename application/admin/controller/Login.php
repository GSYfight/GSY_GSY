<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/14
 * Time: 16:36
 */

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    /*
     * 加载登录页面
     */
    public function index()
    {
        return $this->fetch('login');
    }

    /*
     * 执行登录页面
     */

    public function doLogin()
    {
//        dump($_POST);exit;
        //接收参数
        $data = [
            'username' => input('username'),
            'password' => input('password'),
//            'code' => input('code'),
        ];
        //先验证验证码是否正确  再验证用户名和密码

        if ($data['username'] == '') {
            $this->error('用户名必须填写');
        }
        if ($data['password'] == '') {
            $this->error('密码必须填写');
        }
//        if ($data['code'] == '') {
//            $this->error('验证码必须填写');
//        }
//        判断验证码是否正确
//        if (!captcha_check($data['code'])) {
//            return $this->error('验证码错误', url('Login/login'));
//        }
//        判断用户是否存在
        $info = db('management')->where(['username' => $data['username']])->find();
        if (!isset($info) || empty($info)) {
             $this->error('账号或密码错误');
        }
        if ($info['password'] != md5($data['password'])) {
             $this->error('密码错误');
        }
//        判断用户是否冻结
        $lock=$info['lock'];
        if($lock){
            $this->error('该用户已被冻结');
        }

//        dump(session('admin'));exit;
        //登录成功以后，用户信息保存到Session中
        session('admin', $info);  //返回一个二维数组
//        登陆次数+1
        db('management')->where(['username'=>$data['username']])->setInc('login_time');

        $this->success('跳转成功，正在跳转中', 'Admin/index');
    }

    public function _empty(){
        return '非法访问';
    }
}