<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/21
 * Time: 17:58
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\MemberModel;

class Member extends Controller{
    /*
     * 会员列表
     * */
    public function index(){
        //调用model方法，获得所有数据
        $data = MemberModel::listALL();
        $this->assign('data',$data);
        return $this->fetch('list');
    }
    /*
     * 添加会员
     * */
    public function addMember(){
        //接受参数
        if(request()->isPost()){
            $data = [
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'mobile'=>input('mobile'),
                'email'=>input('email'),
            ];
            //验证
        $validate=validate('Member');
        if(!$validate->scene('add')->check($data)){
            $this->error($validate->getError());
        }
            //调用model方法,上传头像,返回图片的绝对路径
            $res=MemberModel::uploadPic($_FILES);
            if($res){
                $data['pic'] = $res;
            }else{
                //默认头像
                $data['pic'] ="/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg";
            }
            //调用model方法，将$data添加到数据库
            $res = MemberModel::addData($data);
            if($res){
                $this->success('添加成功',url('Member/index'));
            }else{
                $this->error("添加失败");
            }
        }
        return $this->fetch();
    }
    /*
     * 编辑会员
     * */
    public function edit(){
        //接受参数
        $member_id=input('member_id');
        //调用model方法，获取$member_id的数据
        $dataById=MemberModel::dataById($member_id);
        $this->assign('dataById',$dataById);
        if(request()->isPost()){
            $data=[
                'member_id'=>$member_id,
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'mobile'=>input('mobile'),
                'email'=>input('email'),
                'lock'=>input('lock'),
            ];
            //验证
            $validate=validate('Member');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            //调用model方法,上传头像,返回图片的绝对路径
            $res=MemberModel::uploadPic($_FILES);
            if($res){
                //如果原头像不是默认头像，删除原头像
                if($dataById['pic'] !="/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg"){
                    @unlink('.'.$dataById['pic']);
                }
                $data['pic'] =$res;
            }
            //调用model函数，更新数据
            $result = MemberModel::updData($data);
            if($result!==false){
                $this->success('修改成功',url('Member/index'));
            }else{
                $this->error('修改失败');
            }
        }
        return $this->fetch();
    }
    /*
     * 删除会员操作
     * */
    public function del(){
        //接受参数
        $member_id = input('member_id');
        //调用model方法，删除数据
        $res = MemberModel::del($member_id);
        //返回结果
        if($res){
            $this->success('删除成功',url('Member/index'));
        }else{
            $this->error('删除失败');
        }
    }




}