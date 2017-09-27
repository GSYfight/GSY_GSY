<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 20:26
 */
namespace app\index\controller;
use think\Controller;
class Personal extends Controller{
    public function index(){
        return $this->fetch('personal/personal');
    }
    public function message(){
        return $this->fetch('personal/message');
    }
    public function security(){
        return $this->fetch('personal/security');
    }
    public function order(){
        return $this->fetch('personal/order');
    }

}