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
        //获取当前的REQUEST_URI，并将字符串转为数组
        $urlAddress=explode('/',$_SERVER['REQUEST_URI']);
//            var_dump($urlAddress);exit;
        if($urlAddress[1]){
            //如果地址没有输入模板，控制器，方法，返回'index,index'
            $urlRes='index,index';
        }else if(!isset($urlAddress[2])||$urlAddress[2]==''){
            //如果地址有输入模板，没有输入控制器，方法，返回'index,index'
            $urlRes='index,index';
        }else if(!isset($urlAddress[3])||$urlAddress[3]==''){
            //如果地址有输入模板，控制器，没有输入方法，返回 控制器名+',index'
            $urlRes=$urlAddress[2].',index';
            //如果控制器是login，返回'index,index'
            if($urlAddress[2]=='login'){
                $urlRes='index,index';
            }
        }else{

            //如果地址有输入模板，控制器和方法
            //截取控制器和方法，并转化为字符串
            $urlRes=implode(',',[$urlAddress[2],$urlAddress[3],]);
            //查找字符串中.出现的索引
            $num=stripos($urlRes,'.');
            //如果字符串有.出现，截取逗号前的字符串
            if($num!=0){
                $urlRes=substr($urlRes,0,$num);
                //如果控制器是login，返回'index,index'
                if($urlAddress[2]=='login'){
                    $urlRes='index,index';
                }
            }
        }
        $this->assign(['urlAddress'=>$urlRes,'data'=>$data]);
        return $this->fetch('widget/header');
    }

    public function footer(){
        return $this->fetch('widget/footer');
    }
}

