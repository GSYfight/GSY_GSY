<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 14:10
 */

namespace app\admin\validate;

use think\Validate;

class Goods extends Validate
{
//    受保护的属性---验证规则
    protected $rule = [
        'goods_name' => 'require|max:25|unique:goods',
    ];
    //    受保护的属性---验证提示
    protected $message = [
        'goods_name.require' => '栏目名不能为空',
        'goods_name.max' => '栏目长度过长',
        'goods_name.unique' => '栏目名必须唯一',
    ];
    //    受保护的属性---验证场景
    protected $scene = [
        'add' => ['goods_name'],
        'edit' => ['goods_name'],
    ];
}