<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 15:18
 */
namespace app\index\validate;
use think\Controller;

class Login extends Controller{
    //    验证规则
    protected $rule=[
        'phone'=>['regex'=>'/^1[3|4|5|8][0-9]\d{4,8}$/','require'],
        'password'=>'min:6|max:20',
    ];
//    错误提示信息
    protected $message=[
        'phone.require'=>'分类名称必须填写',
        'phone.regex'=>'请填写正确的手机号',
        'password.min'=>'密码不得小于6位',
        'password.max'=>'密码不得大于20位',
    ];
//    验证场景
    protected $scene=[
        'register'=>'phone,password',
        'edit'=>'phone'
    ];
}