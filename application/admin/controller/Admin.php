<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/21
 * Time: 10:50
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as adminModel;
use think\Request;
use app\admin\controller\Base;
class Admin extends Base{

//        数据库用户数据列表
    public function index(){
//        dump($username);exit;
//        调用模型->操作数据库
        $data=adminModel::addAll();
//        dump($data);exit;
//        分配列表模板上
        $this->assign('data',$data);
        return $this->fetch('list');
    }

//    public function addLogin(){
////        dump(session('admin'));exit;
//        $username=session('admin')['username'];
//        adminModel::addLogin($username);
//        return $this->fetch('list');
//    }

//2.用户添加

//    添加用户数据
    public function add(){
//        1.接收数据
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),//对密码进行加密
                'login_time'=>0,
                'lock'=>0,
            ];
//        2.验证数据
        $validate=validate('Admin');
        if(!$validate->scene('add')->check($data)){
             $this->error($validate->getError());
        }
            $data['creat_time']=time();
//            dump($data);exit;
//        3.调用模型->操作数据库
            $res=adminModel::addUser($data);
//        4.返回结果
            if($res){
                $this->success('添加用户成功','Admin/message');
            }else{
                $this->error('添加用户失败');
            }
        }
        return $this->fetch();
    }
//3.用户编辑
    public function edit(){
        //1.接受数据
        $id=input('user_id');
//        dump($id);exit;

        //2.数据库查找数据
        $data=adminModel::edit($id);
//        判断是否有权限更改
//        dump(session('admin'));exit;
        $limit=$data['limit'];
        if($limit<session('admin')['limit']){
            $this->error('无权限更改');
        }

        $this->assign('data',$data);
        return $this->fetch();

    }
//4.用户更新
    public function upd(){
        $data=[
            'user_id'=>input('user_id'),
            'username'=>input('username'),
        ];
        $password=input('password');
        //判断密码是否有更改
        if($password!=''){
            $data['password']=md5(input('password'));
        }
        //2.验证数据
        $validate=validate('Admin');
        if(!$validate->scene('edit')->check($data)){
            $this->error($validate->getError());
        }
//        dump($data);exit;
        //3.调用模型->操作数据库
        $res=adminModel::upd($data);

        if($res){
            $this->success('修改用户成功','Admin/message');
        }else{
            $this->error('修改用户失败');
        }
    }
//5.用户删除
    public function del(){
        $user_id=input('user_id');
        $res=adminModel::del($user_id);
        if($res){
            $this->success('用户删除成功','Admin/message');
        }else{
            $this->error('用户删除失败');
        }
    }
//6.登出功能
    public function logout()
    {
        //清空session的数据
        session('admin', null);
        $this->success('登出成功',url('Login/message'));
//        只执行跳转
//        return $this->redirect('Login/login');
    }
}