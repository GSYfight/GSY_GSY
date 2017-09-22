<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 14:11
 */
namespace app\index\widget;
use think\Controller;

class Widget extends Controller{
    public function header(){
        return $this->fetch('Widget/header');
    }
    public function footer(){
        return $this->fetch('Widget/footer');
    }
}