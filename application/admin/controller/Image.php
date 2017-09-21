<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 16:39
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Image as imageModel;
use app\admin\model\Goods;
class Image extends Controller{
     public function index(){
         $data=imageModel::imageInfo();
         $this->assign('data',$data);
        return $this->fetch('list');
    }
    public function add(){
         if (request()->isPost()){
//             $data=Goods::index();
//             $data=$data->all();
//             foreach ($data as $k=>$v){
//                 if ($v['goods_id']==input('goods_id')){
//                     $imageData=[
//                         'goods_name'=>$v['goods_name'],
//                     ];
//                 }
//             }
             $imageData['goods_id']=input('goods_id');
             if (input('is_face') == 'on') {
                 $imageData['is_face'] = 1;
             } else {
                 $imageData['is_face'] = 0;
             }
             if ($_FILES['image_url']['tmp_name'] != '') {
                 //上传图片
                 $arr = ImageModel::uploadPic('image_url');
                 if ($arr['status'] == 'success') {
                     $imageData['image_url'] = $arr['url'];
                 } else {
                     return $this->error($arr['msg']);
                 }
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
        $goodsData=Goods::index();
        $this->assign('goodsData',$goodsData);
        return $this->fetch();
    }
    public function goodsPicList(){
        $id=input('id');
        $goods_name=input('goods_name');
        $data=imageModel::goodsImageInfo($id);
        $this->assign([
            'data'=>$data,
            'goods_name'=>$goods_name,
        ]);
        return $this->fetch();
    }
}