<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/22
 * Time: 16:16
 */
namespace app\index\model;
use think\Model;

class Login extends Model{
    static public function addData(){

        return $res=db('member')->insert();
    }
}