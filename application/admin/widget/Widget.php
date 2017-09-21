<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/21
 * Time: 10:00
 */
namespace app\admin\widget;
use think\Controller;
class Widget extends Controller{

    public function header(){
        return $this->fetch('widget/header');
    }

    public function left(){
        return $this->fetch('widget/left');
    }
}