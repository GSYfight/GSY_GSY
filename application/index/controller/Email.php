<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/29
 * Time: 21:15
 */
namespace app\index\controller;
use think\Controller;
class Email extends Controller{
    public function index() {
        $toemail='1310161141@qq.com';
        $name='1310161141';
        $subject='QQ邮件发送测试';
        $content='恭喜你，邮件测试成功。';
       dump(send_mail($toemail,$name,$subject,$content));
    }
}