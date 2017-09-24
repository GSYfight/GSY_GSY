<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/23
 * Time: 13:48
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\ProductList as ProductListModel;
class ProductList extends Controller{
    public function index(){
        $cate_id=input('cate_id');
        $keywordsData=ProductListModel::keyWordsList();
        $cateData=ProductListModel::cateList($cate_id);
        $goodsData=ProductListModel::getGoodsByCateId($cate_id);
        $this->assign([
            'goodsData'=>$goodsData,
            'keywordsData'=>$keywordsData,
            'cateData'=>$cateData,
        ]);
        return $this->fetch('productlist/productlist');
    }

}