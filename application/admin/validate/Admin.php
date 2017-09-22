<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/21
 * Time: 12:54
 */

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    //受保护属性   验证规则
    protected $rule = [
        'username' => 'require|max:25|unique:management',
        'password' => 'require',
    ];
    //相对应的提示文字 验证信息
    protected $message = [
        'username.require' => '名称必须填写',
        'username.max' => '名称最多不能超过25个字符',
        'username.unique' => '用户名已存在',
        'password.require' => '密码必须填写',
    ];
    //验证场景
    protected $scene = [
        'add' => ['username', 'password'],
        'edit' => ['username'],
    ];
}