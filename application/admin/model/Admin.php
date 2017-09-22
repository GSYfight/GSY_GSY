<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/21
 * Time: 11:18
 */
namespace app\admin\model;
use think\Model;
class Admin extends Model{
    static public function addAll(){

//        接收数据库列表所有数据
        $data=db('management')->paginate(8);
//        返回数据结果
        return $data;

    }
////    增加登陆次数
//    static public function addLogin($username){
//        db('management')->where(['username'=>$username])->setInc('login_time');
//    }

//    添加用户
    static public function addUser($data){
        //插入数据到数据库
        $data=db('management')->insert($data);
        return $data;

    }

//    编辑用户
    static public function edit($id){
        //插入数据到数据库
        $data=db('management')->find($id);
        return $data;

    }
//    更新数据
    static public function upd($data){
        $res=db('management')->update($data);
        $res!==false?true:false;
        return $res;
    }
//    删除用户
    static public function del($user_id){
        $res=db('management')->delete($user_id);
        return $res;
    }
}