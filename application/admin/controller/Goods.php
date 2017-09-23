<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 10:53
 */

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Goods as GoodsModel;
use app\admin\model\Image as ImageModel;
use app\admin\model\CateModel;
class Goods extends Controller
{
    public function index()
    {
        $data = GoodsModel::index();
        $this->assign('data', $data);
        return $this->fetch('list');
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = [
                'goods_name' => input('goods_name'),
                'market_price' => input('market_price'),
                'sell_price' => input('sell_price'),
                'store' => input('store'),
                'unit' => input('unit'),
                'content' => input('content'),
                'last_modify_id' => input('user_id'),
            ];
            //判断是否选择分类
            if (!input('cate_id')){
                return $this->error('商品分类未选择');
            }else{
                $data['cate_id']=input('cate_id');
            }
            if (input('desc')==null){
                $data['desc']='暂无简介';
            }else{
                $data['desc']=input('desc');
            }
            //判断是否上架
            if (input('maketable') == 'on') {
                $data['maketable'] = 1;
            } else {
                $data['maketable'] = 0;
            }
            //接收关键字
            $keywords = input('keywords');
            $keywords = str_replace('，', ',', $keywords);//把中文逗号改成英文逗号
            $data['keywords'] = $keywords;
            //验证
            $validate = validate('Goods');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
            //第一次添加商品两个时间一样
            $data['create_time'] = time();
            $data['last_time'] = time();
            if ($_FILES['image_url']['tmp_name'] != '') {
                //上传图片
                $arr = ImageModel::uploadPic('image_url');
                if ($arr['status'] == 'success') {
                    $imageData['image_url'] = $arr['url'];
                } else {
                    return $this->error($arr['msg']);
                }
            }else{
                return $this->error('未选择图片');
            }
            //把商品信息加入数据库，返回id
            $goods_id = GoodsModel::addGoods($data);
            if (!$goods_id) {
                $this->error('添加失败');
            }
            $imageData['goods_id'] = $goods_id;
            if (input('is_face') == 'on') {
                $imageData['is_face'] = 1;
                //把该商品其他图片的is_face改为0非封面
                $res=ImageModel::changeGoodsPicFace( $imageData['goods_id']);
            } else {
                $imageData['is_face'] = 0;
            }
            $imageData['image_b_url'] = ImageModel::thumb($imageData['image_url'], $width = 650, $height = 650);
            $imageData['image_m_url'] = ImageModel::thumb($imageData['image_url'], $width = 240, $height = 240);
            $imageData['image_s_url'] = ImageModel::thumb($imageData['image_url'], $width = 120, $height = 120);

            $res = ImageModel::addImage($imageData);

            if ($res) {
                return $this->success('添加成功', url('Goods/index'));
            } else {
                return $this->error('添加失败');
            }
        }
        //加载添加商品页面时，先把分类类表加过去
        $cateData =CateModel::listAllData();
        foreach ($cateData as $key=>$val){
            //通过两个fro循环，判断是不是有子分类，给有子分类加个属性disabled
            foreach ($cateData as $k=>$v){
                if($val['cate_id'] == $v['pid']){
                    $cateData[$key]['disabled'] = 'disabled';
                    break;
                }else{
                    $cateData[$key]['disabled'] = '';
                }
            }
        }
        $this->assign('cateData', $cateData);
        return $this->fetch();
    }
    public function edit(){
        $id=input('goods_id');
        if (request()->isPost()){
            $data = [
                'goods_id'=>input('goods_id'),
                'goods_name' => input('goods_name'),
                'desc' => input('desc'),
                'cate_id' => input('cate_id'),
                'market_price' => input('market_price'),
                'sell_price' => input('sell_price'),
                'store' => input('store'),
                'unit' => input('unit'),
                'content' => input('content'),
                'last_modify_id' => input('user_id'),
            ];

           //判断分类'cate_id' => input('cate_id')
            //判断是否上架
            if (input('maketable') == 'on') {
                $data['maketable'] = 1;
            } else {
                $data['maketable'] = 0;
            }
            //接收关键字
            $keywords = input('keywords');
            $keywords = str_replace('，', ',', $keywords);//把中文逗号改成英文逗号
            $data['keywords'] = $keywords;
            //验证
            $validate = validate('Goods');
            if (!$validate->scene('edit')->check($data)) {
                return $this->error($validate->getError());
            }
            //第一次添加商品两个时间一样
            $data['last_time'] = time();
//            if ($_FILES['image_url']['tmp_name'] != '') {
//                //上传图片
//                $arr = ImageModel::uploadPic('image_url');
//                if ($arr['status'] == 'success') {
//                    $data['image_url'] = $arr['url'];
//                } else {
//                    return $this->error($arr['msg']);
//                }
//            }
            $res=GoodsModel::updGoods($data);
           if ($res) {
                return $this->success('修改成功', url('Goods/index'));
           } else {
                return $this->error('修改失败');
           }


        }
        $cateData =CateModel::listAllData();
        foreach ($cateData as $key=>$val){
            //通过两个fro循环，判断是不是有子分类，给有子分类加个属性disabled
            foreach ($cateData as $k=>$v){
                if($val['cate_id'] == $v['pid']){
                    $cateData[$key]['disabled'] = 'disabled';
                    break;
                }else{
                    $cateData[$key]['disabled'] = '';
                }
            }
        }
        $this->assign('cateData', $cateData);
        $data=GoodsModel::getgoodsById($id);
        $this->assign([
            'data'=>$data,
            'cateData'=>$cateData
        ]);
        return $this->fetch();
    }
    public function upd()
    {
        return $this->fetch();
    }



}