<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 14:01
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\LoginModel;
use php\api_demo\SmsDemo;

class Login extends Controller
{
    /*
     * 登录界面
     * */
    public function login()
    {
        //点击登录时的界面的控制器和方法
        $fullUrl = input('fullUrl');
        $this->assign('fullUrl', $fullUrl);
        if (request()->isPost()) {
            session('fullUrl', $fullUrl);
            return $fullUrl;
        }
        return $this->fetch();
    }

    /*
     * 执行登录界面
     * */
    public function doLogin()
    {
        //接受参数
        //点击登录时的界面的控制器和方法
        $this->assign('address', input('urlAddress'));
        $urlAddress = str_replace(',', '/', input('urlAddress'));
        if (request()->isPost()) {
//            //验证码是否正为空
//            if (input('code') == '') {
//                $this->error('验证码必须填写');
//            }
////        判断验证码是否正确
//            if (!captcha_check(input('code'))) {
//                $this->error('验证码错误', url('Login/login'));
//            }

            $data = [
                'mobile' => input('mobile'),
                'password' => input('password'),
                'ip' => $_SERVER["REMOTE_ADDR"],
            ];
            //验证
//            $validate=validate('Login');
//            if(!$validate->scene('login')->check($data)){
//                $this->error($validate->getError());
//            }
//            //根据mobile获取数据库数据，并返回该条数据
            $res = LoginModel::dataByMobile($data['mobile'], 'mobile');
            if ($res == '') {
                //如果返回值为空，提示手机号未注册
                $this->error('该手机号未注册');
            } else {
                //手机号如果已注册，验证密码是否一致
                $data['password'] = md5($data['password']);
                if ($data['password'] == $res['password']) {
                    //将信息存储到session
                    session("index", $res);
                    //更新member数据库，登录次数字段和最近更新时间字段
                    $data['last_modify'] = time();
                    //调用model方法，更新数据库
                    LoginModel::loginUpd($data);
//                    $this->success('登录成功',url(session('fullUrl')));
                    $this->redirect(session('fullUrl'));
                }
                $this->error('账号或密码错误');
            }
        }
    }

    /*
     * 注册界面
     * */
    public function register(){
        //接受参数,提交注册表单时
        if (request()->isPost()) {
            //接受参数
            $repassword = md5(input('repassword'));
            //注册表单数据
            $data = [
                'mobile' => input('mobile'),
                'password' => input('password'),
            ];
//            //验证码是否正为空
//            if (input('code') == '') {
//                $this->error('验证码必须填写');
//            }
////        判断验证码是否正确
//            if (!captcha_check(input('code'))) {
//                $this->error('验证码错误', url('Login/register'));
//            }
//            //短信验证码是否正确.根据手机号查找code表数据,并返回数据
//            $res = LoginModel::codeByMobile($data['mobile']);
//            //判断验证码是否超时
//            if(time()-$res['register_time']>300){
//                $this->error('短信验证码失效');
//            }
//            if(!$res){
//                $this->error('请获取短信验证码');
//            }else if(input('smsCode')!=$res['register_code']){
//                    $this->error('请填写正确短信验证码');
//            }
//            //验证密码，手机号是否已注册，关联member数据表
//            $validate=validate('Register');
//            if(!$validate->scene('register')->check($data)){
//                $this->error($validate->getError());
//            }
            //密码加密
            $data['password'] = md5($data['password']);
            //如果两次密码不一致，返回注册界面
//            if($repassword!=$data['password']){
//                $this->error('两次密码不一致',url('Login/register'));
//            }
            //生成一个默认的username
            $nickName = $this->nickName();
            $data['username'] = $nickName;
            //生成注册时间
            $data['login_time'] = time();
            //默认头像
            $data['pic'] = "/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg";
            //生成注册ip
            $data['ip'] = $_SERVER["REMOTE_ADDR"];
            //调用model方法，将$data添加到member表中
            $res = LoginModel::addData($data);
            if ($res) {
                $this->success('注册成功，即将跳转至首页', url('Index/index'));
            }
        }
        return $this->fetch();
    }

    /*
     * 发送短信验证码
     * */
    public function sendCode()
    {
        //接受参数，发送短信验证码时
        $data = [
            'mobile' => input('mobile'),
        ];
//            验证手机号是否已经注册
        $validate = validate('Register');
        if (!$validate->scene('ajax')->check($data)) {
            return json([
                'status' => 'error',
                'msg' => $validate->getError()
            ]);
        }
        //发送手机验证码
        $demo = new SmsDemo(
            "LTAIx2vRzJXCny1f",
            "Qxqfi391flDg3QhOQRNVs9XDSSJ2zY"
        );

        //生成随机验证码
        $randomCode = rand(1000, 9999);
        //将随机验证码添加至数据库
        if(input('status')=='email'){
            //邮箱验证发送手机验证码
            $data['email_veri'] = $randomCode;
            $data['email_veri_time'] = time();
        }else{
            //注册发送手机验证码
            $data['register_code'] = $randomCode;
            $data['register_time'] = time();
        }


        LoginModel::saveCode($data);
        //发送短信验证码
        $response = $demo->sendSms(
            "太阳升起的地方", // 短信签名
            "SMS_98990044", // 短信模板编号
            $data['mobile'], // 短信接收者
            Array(  // 短信模板中字段的值
                "code" => $randomCode,
                "product" => "dsd"
            ),
            "123"
        );
//        var_dump($response);exit;
        $arr = (array)$response;
        if ($arr['Code'] == 'OK') {
            return json([
                'status' => 'success',
                'msg' => '发送成功',
            ]);
        } else {
            return json([
                'status' => 'error',
                'msg' => '发送失败',
            ]);
        }
    }

    /*
     * 生成一个随机用户名
     * */
    public function nickName($length = 10)
    {
        //生成十位数，随机username
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_';
        $nickName = '';
        for ($i = 0; $i < $length; $i++) {
            $nickName .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        //如果nickName存在，重新生成一次
        $res = LoginModel::dataByMobile($nickName, 'username');
        if (!empty($res)) {
            $this->nickName();
        }
        return $nickName;
    }

    /*
    * 登出
    * */
    public function logout()
    {
        session('index', null);
        $fullUrl = input('fullUrl');
        return $fullUrl;
    }
    /*
     * 邮箱验证
     * */
    public function doVeri(){
            input('mobile');
        //            //验证码是否正为空
//            if (input('code') == '') {
//                $this->error('验证码必须填写');
//            }
////        判断验证码是否正确
//            if (!captcha_check(input('code'))) {
//                $this->error('验证码错误', url('Login/register'));
//            }
//            //短信验证码是否正确.根据手机号查找code表数据,并返回数据
//            $res = LoginModel::codeByMobile($data['mobile']);
//            //判断验证码是否超时
//            if(time()-$res['email_veri_time']>300){
//                $this->error('短信验证码失效');
//            }
//            if(!$res){
//                $this->error('请获取短信验证码');
//            }else if(input('smsCode')!=$res['email_veri']){
//                    $this->error('请填写正确短信验证码');
//            }
        return $this->fetch('Personal/email');
    }



}
