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
        //获取数据库所有栏目
        $data=WidgetModel::getCateByPid();
        $this->assign('data',$data);
        //判断用户是否已登录
        $isLogined=session('index');
        $res =[];
        if(!empty($isLogined)){
            //如果用户已经登录，获取member信息
            $res = WidgetModel::memberData($isLogined);
        }
        $this->assign('res',$res);
        //返回当前页面的url
        $fullUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
        $this->assign('fullUrl',$fullUrl);
        return $this->fetch('widget/header');
    }

    public function footer(){
        return $this->fetch('widget/footer');
    }
    public function left(){
        return $this->fetch('widget/left');
    }
}

