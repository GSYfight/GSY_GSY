<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/16
 * Time: 1:38
 */
namespace app\admin\validate;
use think\Validate;

class Cate extends Validate{
//    验证规则
    protected $rule=[
        'name'=>'require|max:20|unique:cate',
    ];
//    错误提示信息
    protected $message=[
        'name.require'=>'分类名称必须填写',
        'name.unique'=>'分类名称已存在',
        'name.max'=>'分类名称不得超过20字',
    ];
//    验证场景
    protected $scene=[
        'add'=>'name',
        'edit'=>'name'
    ];
}