<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/18
 * Time: 23:12
 */
namespace app\admin\controller;
use think\Controller;
class Base extends Controller{
    /*
     * 构造函数，执行登入和未登入的权限管理
     */

    public function __construct()
    {
        parent::__construct();
        //获取admin数据
        $admin=session('admin');
        if(!isset($admin)||empty($admin)){
            $this->error('请先登入',url('Login/index'));
        }
    }


        public function _empty(){
            return '非法访问';
        }


}