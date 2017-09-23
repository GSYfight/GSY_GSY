<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 9:47
 */
namespace app\admin\validate;
use think\Validate;

class Member extends Validate{
//    验证规则
    protected $rule=[
        'username'=>'require|max:20|unique:member',
        'password'=>'require',
        'mobile'=>'unique:member',
        'email'=>'unique:member',
    ];
//    错误提示信息
    protected $message=[
        'name.require'=>'用户名必须填写',
        'name.unique'=>'用户名已存在',
        'name.max'=>'用户名不得超过20字',
        'password.require'=>'密码不能为空',
        'mobile.unique'=>'该手机已注册',
        'email.unique'=>'该邮箱已注册',
    ];
//    验证场景
    protected $scene=[
        'add'=>'username,password,mobile,email',
        'edit'=>'username,mobile,email'
    ];
}