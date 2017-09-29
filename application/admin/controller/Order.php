<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28
 * Time: 10:05
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\OrderModel;
class Order extends Controller{
//    加载订单列表
    public function index(){
        $data=OrderModel::olderList();
        $this->assign('data',$data);
        return $this->fetch('list');
    }
    //编辑订单
    public function edit(){
        $order_id=input('order_id');
        $data=OrderModel::gitOrderById($order_id);
        $this->assign('data',$data);
        return $this->fetch();
    }
    //执行更新订单
    public function upd(){
        $data=[
            'order_id'=>input('order_id'),
            'total_amount'=>input('total_amount'),
            'status'=>input('status'),
            'pay_status'=>input('pay_status'),
            'ship_name'=>input('ship_name'),
            'ship_mobile'=>input('ship_mobile'),
            'ship_area'=>input('ship_area'),
            'ship_address'=>input('ship_address'),
        ];
        $validate=validate("Order");
        if (!$validate->scene('edit')->check($data)){
            $this->error($validate->getError());
        }
        $data['last_modify']=time();
        $res=OrderModel::updOrder($data);
        if ($res){
            $this->success('更新成功！',url("Order/index"));
        }else{
            $this->error('更新失败！');
        }
    }
    public function detail(){
        $order_id=input('order_id');
        $detail=OrderModel::detail($order_id);
        $this->assign('data',[
            'data'=>$detail['data'],
            'page'=>$detail['page'],
        ]);
        return $this->fetch('detail');
    }
    public function del(){
        return $this->fetch('list');
    }
}