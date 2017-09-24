<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/23
 * Time: 13:48
 */
namespace app\index\controller;
use think\Controller;
class ProductList extends Controller{
    public function index(){
        return $this->fetch();
    }
}