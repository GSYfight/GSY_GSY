<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/29
 * Time: 21:15
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\LoginModel;
class Email extends Controller{
    public function index() {
        $email=input('email');
        $res=LoginModel::checkEmail($email);
        //生成随机验证码
        $randomCode = rand(1000, 9999);
        if (!$res){
            //        strstr('abc@jb51.net', '@', TRUE); //参数设定true, 返回查找值@之前的首部，abc
            ////        strstr( 'abc@jb51.net', '@'); //默认返回查找值@之后的尾部，@jb51.net
            $toemail=$email;
            $name= strstr($email, '@', TRUE);;
            $subject='QQ邮件发送测试';
//            $content='http://shop.com/index.php/index/login/doveri.html#';
            $content='验证码'.$randomCode;
            send_mail($toemail,$name,$subject,$content);
            return [
                'status'=>'success',
                'code'=>$randomCode,
                ];
        }else{
            return ['status'=>'error'];
        }

    }

}