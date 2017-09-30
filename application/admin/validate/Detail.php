<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/29
 * Time: 15:56
 */
namespace app\admin\validate;
use think\Validate;
class Detail extends Validate{
    //    受保护的属性---验证规则
    protected $rule = [
        'ship_mobile' => 'egt:0',
        'freight' => 'egt:0',
    ];
    //    受保护的属性---验证提示
    protected $message = [
        'ship_mobile.egt' => '总价不能小于零',
        'freight.min' => '运费不能小于零',
    ];
    //    受保护的属性---验证场景
    protected $scene = [
        'add' => ['ship_mobile', 'freight'],
        'edit' => ['ship_mobile', 'freight'],
    ];
}