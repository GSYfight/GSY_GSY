<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 22:46
 */
namespace app\admin\validate;
use think\Validate;
class Order extends Validate{
//    受保护的属性---验证规则
    protected $rule = [
        'ship_mobile' => 'max:11|min:7',
    ];
    //    受保护的属性---验证提示
    protected $message = [
        'ship_mobile.max' => '手机号码长度过长',
        'ship_mobile.min' => '手机号码位数不够',
    ];
    //    受保护的属性---验证场景
    protected $scene = [
        'add' => ['ship_mobile'],
        'edit' => ['ship_mobile'],
    ];
}