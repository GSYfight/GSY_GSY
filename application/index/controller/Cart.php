<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/25
 * Time: 18:06
 */
namespace app\index\controller;
use think\Controller;

class Cart extends Controller{
    public function index(){
        //接受参数

        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        $data = [
            'goods_id'=>$goods_id,
            'goods_num'=>$goods_num,
        ];
        //查询当前cookie缓存
        $oldCookie=cookie('index');
        $cookie=unserialize($oldCookie);
        if($data){
            //判断缓存中是否有$data['goods_id]
          if(!isset($cookie['index'][$goods_id]['goods_id'])){
                //如果$cookie不存在，或者没有当前goods_id，将$data添加至$cookie
                $cookie['index'][$goods_id]=$data;
//                var_dump($cookie);
            }else{
                //如果$cookie有当前goods_id，在原数组中增加数量
                $cookie['index'][$goods_id]['goods_num']+=$goods_num;
            }
            //将$cookie存到cookie中
            $newCookie=serialize($cookie);
            cookie('index',$newCookie);
        }
    }
    /*
     * 购物车页面
     * */
    public function cart(){
//        cookie('index',null);
//        var_dump(unserialize(cookie('index')));exit;
        $data = unserialize(cookie('index'));
        if($data){
            $this->assign('data',$data);
        }
        $this->fetch();

    }
}