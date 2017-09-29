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
            'freight'=>input('freight'),
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
            'freight'=>$detail['freight'],
            'total_amount'=>$detail['total_amount'],
        ]);
        return $this->fetch('detail');
    }
    //改变运费和总价
    public function change(){
        $order_id=input('order_id');
        if (request()->isPost()){
            $data=[
                'order_id'=>$order_id,
                'total_amount'=>input('total_amount'),
                'freight'=>input('freight'),
            ];
            $validate=validate('Detail');
            if (!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $res=OrderModel::updDetail($data);
            if ($res){
                $this->success('更新成功！');
            }else{
                $this->error('更新失败！');
            }

        }
        $detail=OrderModel::detail($order_id);
        $this->assign('data',[
            'order_id'=>$order_id,
            'freight'=>$detail['freight'],
            'total_amount'=>$detail['total_amount'],
        ]);
        return $this->fetch('change');
    }
    public function cancel(){
        $order_id=input('order_id');
        $status=input('status');
        if ($status==3){
            $status=1;
        }else{
            $status=3;
        }
        $res=OrderModel:: changeOrderStatus($order_id,$status);
        if ($res){
            $this->success('更新成功！');
        }else{
            $this->error('更新失败！');
        }
    }
}