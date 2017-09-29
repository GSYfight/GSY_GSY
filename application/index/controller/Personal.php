<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 20:26
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\LoginModel;
use app\index\model\orderModel;
class Personal extends Controller{
    public function isLogin(){
        if(!session('index')){
            $this->redirect('Index/index');
        }
    }
    /*
     * 个人中心首页
     * */
    public function index(){
        $this->isLogin();
        //获取登录会员信息
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询用户信息member
        $memberData=LoginModel::dataByMobile($member_id,'member_id');
        //根据membe_id查询order用户所有订单
        $orderData=orderModel::selectData($member_id,'member_id');
        $this->assign([
            'memberData'=>$memberData,
            'orderData'=>$orderData,
        ]);
        return $this->fetch('personal/personal');
    }
    /*
     * 个人信息
     * */
    public function message(){
        $this->isLogin();
        //获取登录会员信息
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询用户信息member
        $memberData=LoginModel::dataByMobile($member_id,'member_id');
        $this->assign([
            'memberData'=>$memberData,
        ]);
        return $this->fetch('personal/message');
    }
    /*
     * 安全中心
     * */
    public function security(){
        $this->isLogin();
        //获取登录会员信息
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询用户信息member
        $memberData=LoginModel::dataByMobile($member_id,'member_id');
        $this->assign([
            'memberData'=>$memberData,
        ]);
        return $this->fetch('personal/security');
    }
    /*
     * 订单信息
     * */
    public function order(){
        $this->isLogin();
        //获取登录会员信息
        $member=session('index');
        $member_id=$member['member_id'];
        //根据membe_id查询order用户所有订单
        $orderData=orderModel::selectData($member_id,'member_id');
        $this->assign([
            'orderData'=>$orderData,
        ]);
        return $this->fetch('personal/order');
    }
    /*
     * 邮箱验证
     * */
    public function email(){
        $this->isLogin();
        //获取登录会员信息
        $member=session('index');
        $member_id=$member['member_id'];
        //根据member_id查询用户信息member
        $memberData=LoginModel::dataByMobile($member_id,'member_id');
        $this->assign([
            'memberData'=>$memberData,
        ]);
        return $this->fetch();
    }

}