<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/21
 * Time: 10:04
 */
namespace app\admin\controller;
use think\Controller;
class Index extends Base {

    public function index(){
        return $this->fetch();
    }
}