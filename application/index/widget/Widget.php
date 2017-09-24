<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/22
 * Time: 10:16
 */
namespace app\index\widget;
use think\Controller;
use app\index\model\Widget as WidgetModel;
class Widget extends Controller{

    public function header(){
        $data=WidgetModel::getCateByPid();
        $this->assign('data',$data);
        return $this->fetch('widget/header');
    }

    public function footer(){
        return $this->fetch('widget/footer');
    }
}

