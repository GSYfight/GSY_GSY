<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/19
 * Time: 23:11
 */
namespace app\admin\controller;
use think\Controller;
class Error extends Controller{
    public function _empty(){
        return '无法找到控制器';
    }
}