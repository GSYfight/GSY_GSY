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
                'cate_id' => input('cate_id'),
                'desc' => input('desc'),
                'market_price' => input('market_price'),
                'sell_price' => input('sell_price'),
                'store' => input('store'),
                'content' => input('content'),
                'last_modify_id' => input('user_id'),
            ];
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
                    $data['image_url'] = $arr['url'];
                } else {
                    return $this->error($arr['msg']);
                }
            }
            //把商品信息加入数据库，返回id
            $goods_id = GoodsModel::addGoods($data);
            if (!$goods_id) {
                $this->error('添加失败');
            }
            $imageData = [
                'goods_id' => $goods_id,
                'image_url' => $data['image_url'],
                'is_face' => 1
            ];
            $imageData['image_b_url'] = ImageModel::thumb($data['image_url'], $width = 650, $height = 650);
            $imageData['image_m_url'] = ImageModel::thumb($data['image_url'], $width = 240, $height = 240);
            $imageData['image_s_url'] = ImageModel::thumb($data['image_url'], $width = 120, $height = 120);

            $res = ImageModel::addImage($imageData);

            if ($res) {
                return $this->success('添加成功', url('Goods/index'));
            } else {
                return $this->error('添加失败');
            }
        }
        $cateData = [
            'id' => 1,
            'catename' => '水果'
        ];
        $this->assign('cateData', $cateData);
        return $this->fetch();
    }
    public function upd()
    {
        return $this->fetch();
    }



}