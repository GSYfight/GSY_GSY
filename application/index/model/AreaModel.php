<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/29
 * Time: 14:58
 */
namespace app\index\model;
use think\Model;

class AreaModel extends Model{
    static public function findArea($province,$city,$zone){
        $p =db('area')->find($province);
        $c =db('area')->find($city);
        $z =db('area')->find($zone);
        return [
            'province'=>$p,
            'city'=>$c,
            'zone'=>$z,
        ];
    }
}