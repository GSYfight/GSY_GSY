<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/21
 * Time: 11:38
 */
namespace app\admin\model;
use think\Model;

class CateModel extends Model{
    /*
     * 获取数据库的数据
     * */
    static public function listAll(){
        // 获取数据库数
        $data=db('cate')->order('path')->paginate(8);
        $page =$data->render();
        //将$data转成数组
        $data=$data->all();
        foreach ($data as $k=>$v) {
            $data[$k]['name']=str_repeat("------",$v['level']).$v['name'];
        }
        //返回值
        return $allData=[
            'page'=>$page,
            'data'=>$data,
        ];
    }
    /*
     * 获取数据库所有数据，select形式
     * */
    static public function listAllData(){
         $data=db('cate')->order('path')->select();
        foreach ($data as $k=>$v) {
            $data[$k]['name']=str_repeat("------",$v['level']).$v['name'];
        }
        return $data;
    }
    //根据id获得对应的数据
    static public function dataById($id){
        if(empty($id)){
            return false;
        }
        return $dataById=db('cate')->find($id);
    }
    //将参数$data添加至数据库，并返回主键
    static public function addReturnKey($data){
        if(empty($data)){
            return false;
        }
        return $addReturnKey=db('cate')->insertGetId($data);
    }
    /*
     * 数据库更新参数$data
     * */
    static public function updData($data){
        if(empty($data)){
            return false;
        }
        return $res = db('cate')->update($data);
    }
    /*
     * 删除参数$cate_id对应的数据
     * */
    static public function del($id){
        if(empty($id)){
            return false;
        }
        //获取$id数据
        $data = db('cate')->find($id);
        $res =[
            'state'=>'success',
            'msg'=>''
        ];
        //如果$data有子类，则返回false
        $child=db('cate')->where('pid',$data['cate_id'])->select();
        if(!empty($child)){
             $res['state']="error";
            return $res;
        }
        //删除数据
        $res['msg'] = db('cate')->delete($id);
        //如果该分类有商品，不能删除该分类
        return $res;
    }
}