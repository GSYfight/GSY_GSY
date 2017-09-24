<?php
namespace app\index\controller;
use think\Controller;
use app\index\Model\Index as indexModel;
class Index extends Controller
{
    public function index()
    {
        //获取商品管理的所有数据
        $data=indexModel::addAll();
//        echo db()->getLastSql();exit;
//        dump($data);exit;
        $this->assign('data',$data);
        return $this->fetch('index');
    }
}
