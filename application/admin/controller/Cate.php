<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/21
 * Time: 11:08
 */
namespace app\admin\controller;
use think\Controller;
use app\admin\model\CateModel;
//无限级分类
class Cate extends Controller{
    /*
     * 分类列表页
     * */
    public function lis(){
        //调用model静态函数，获取所有数据库数据
        $allData= CateModel::listAll();
        //变量分配到模板
        $this->assign([
            'page'=>$allData['page'],
            'data'=>$allData['data']
        ]);
        return $this->fetch('list');
    }
    /*
     *添加分类
     * */
    public function addCate(){
        //调用model静态方法，获得数据库所有数据
        $data =CateModel::listAllData();
        //将变量分配到模板
        $this->assign('data',$data);
        //接收数据
        $id= input('id');
        if(request()->isPost()){
            //调用model方法，根据id查找数据
            $dataById=CateModel::dataById($id);
            $data=[
                'pid'=>input('id'),
                'name'=>input('name'),
                'level'=>$dataById['level']+1,
            ];
            //验证
            $validate=validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            //调用model，将$data添加到数据库并返回主键
            $addReturnKey=CateModel::addReturnKey($data);
            $data['path']=$dataById['path'].','.$addReturnKey;
            $data['cate_id']=$addReturnKey;
            //调用model，更新$data
            $res = CateModel::updData($data);
            //返回结果
            if($res!==false){
                $this->success("添加成功",url('Cate/lis'));
            }else{
                $this->error('添加失败');
            }
        }
        return $this->fetch();
    }
    //编辑分类
    public function edit(){
        //接收数据
        $id = input("cate_id");
        //调用model方法，获取$id的数据
        $dataById = CateModel::dataById($id);
        //变量分配到模板
        $this->assign('dataById',$dataById);
        if(request()->isPost()){
            $data=[
                'name'=>input('name'),
                'cate_id'=>$id
            ];
            //验证
            $validate=validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            //调用model方法，更新$data数据
            $res = CateModel::updData($data);
            //返回结果
            if($res!==false){
                $this->success("修改成功",url('Cate/lis'));
            }else{
                $this->error('修改失败');
            }
        }
        return $this->fetch();
    }
    /*
     * 删除分类操作
     * */
    public function del(){
        //接收数据
        $cate_id = input('cate_id');
        //调用model方法，删除$cate_id对应的数据
        $res = CateModel::del($cate_id);
        if($res['state']=='error'){
            $this->error("该分类有子类，不能删除");
        }else if($res['state']=='success'){
            if($res['msg']){
                $this->success('删除成功',url('Cate/lis'));
            }else{
                $this->error("删除失败");
            }
        }
    }
}