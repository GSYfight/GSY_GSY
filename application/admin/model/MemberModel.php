<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/21
 * Time: 18:02
 */
namespace app\admin\model;
use think\Model;

class MemberModel extends Model{
    static public function listALL(){
        return db('member')->paginate(8);
    }
    /*
     * 上传头像
     * */
    static public function uploadPic($picFile){
        if(empty($picFile)||$picFile['pic']['tmp_name']==''){
            return false;
        }
        // 获取表单上传文件
        $file = request()->file('pic');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                //拼接图片存储地址的绝对路径
                $url ='/uploads/'.$info->getSaveName();
                //把getSaveName返回值中的反斜线改为正斜线
                return $url =str_replace('\\','/',$url);
            }else{
                // 上传失败
                return false;
            }
        }
        return false;
    }
    /*
     * 添加数据到数据库
     * */
    static public function addData($data){
        if(empty($data)){
            return false;
        }
        return $res = db('member')->insert($data);
    }
    /*
     * 根据参数$id获取数据
     * */
    static public function dataById($id){
        if(empty($id)){
            return false;
        }
        return $dataById=db('member')->find($id);
    }
    /*
     * 更新数据
     * */
    static public function updData($data){
        return $res=db('member')->update($data);
    }
    /*
     * 删除数据
     * */
    static public function del($id){
        if(empty($id)){
            return false;
        }
        return $res=db('member')->delete($id);
    }

}