<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/22
 * Time: 10:16
 */
namespace app\index\widget;
use think\Controller;
class Widget extends Controller{

    public function header(){
        return $this->fetch('widget/header');
    }

    public function footer(){
        return $this->fetch('widget/footer');
    }
}
