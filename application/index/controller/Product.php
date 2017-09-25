<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/22
 * Time: 15:09
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\Product as indexProduct;
class Product extends Controller{
    public function index(){
        $goodsId=input('goodsId');
        $data=indexProduct::search($goodsId);
//        dump($data);exit;
        $this->assign('data',$data);
        return $this->fetch('product');
    }

    public function ajaxImg(){
        $imgId=input('imgId');
        $data=indexProduct::foundImg($imgId);
        return $data;
    }

}