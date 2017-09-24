<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 15:18
 */
namespace app\index\validate;

use think\Validate;

class Register extends Validate {
    //    验证规则
    protected $rule=[
        'mobile'=>['regex'=>'/^1[3|4|5|8][0-9]{9}/','require','unique:member'],
        'password'=>'min:6|max:20',
    ];
//    错误提示信息
    protected $message=[
        'mobile.require'=>'手机号必须填写',
        'mobile.regex'=>'请填写正确的手机号',
        'mobile.unique'=>'该手机已被注册',
        'password.min'=>'密码不得小于6位',
        'password.max'=>'密码不得大于20位',
    ];
//    验证场景
    protected $scene=[
        'register'=>'mobile,password',
        'ajax'=>'mobile',
    ];
}