<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 16:05
 */
namespace app\admin\model;
use think\Model;
class Image extends Model{
    static public function index(){
        $data=db('image')->order('image_id desc')->paginate(5);
        return $data;
    }
    //上传图片的函数
    static public function uploadPic($filename)
    {
        $file = request()->file($filename);
        if ($file) {//盘口到当前根目录的路径
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {//成功上传后 获取上传信息
//                echo $info->getExtension();//输出图片
                //拼接图片的完整路径
                $url = '/uploads/' . $info->getSaveName();
                //把反斜线替换成正斜线
                $url = str_replace('\\', '/', $url);
                return [
                    'status' => 'success',
                    'url' => $url,
                ];
//                echo $info->getSaveName();//获取时间文件夹/和文件名
//                echo $info->getFileInfo();//输出文件名
            } else {
                return [
                    'status' => 'error',
                    'msg' => $file->getError(),
                ];
            }
        }
    }
//比例缩放方法
    static public function thumb($url, $width = 120, $height = 120)
    {
        $image = \think\Image::open('.' . $url);
        $dir_name = dirname($url);//目录名
        $file_name = basename($url);//文件名
        $save_name = $dir_name . '/' . $width . '_' . $file_name;
//// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
//        $image->thumb(150, 150)->save('./thumb.png');
        //保存路经
        $result = $image->thumb($width, $height)->save('./' . $save_name);
        if (!$result) {
            return false;
        }
        //缩放成功返回缩放图片的图片名
        return $save_name;
    }
    //添加图片
     static public function addImage($data){
    $res=db('image')->insert($data);
    return $res?true:false;
    }
    static public function imageInfo(){
        $data=db('image')
            ->alias('p')//别名
            ->field('g.goods_id,g.goods_name,p.image_id,p.image_url,p.is_face')//字段
            ->join('goods g','g.goods_id=p.goods_id','LEFT')//参数(‘关联的表 别名’，‘关联的条件’)
            ->paginate(4);
        return $data;
    }
    //通过商品id寻找商品所有哦图片信息
    static public function goodsImageInfo($id){
        $data=db('image')->where(['goods_id'=>$id])->paginate(4);
        $page=$data->render();
        $data=$data->all();
        $arr=[
            'page'=> $page,
            'data'=>$data,
        ];
        return $arr;
    }
    //通过商品id把现有的图片改为不是封面
    static public function changeGoodsPicFace($id){
        $data=db('image')->where(['goods_id'=>$id])->select();
        foreach ($data as $k=>$v){
            $data[$k]['is_face']=0;
            $res=db('image')->update($data[$k]);
        }
        return $res!==false?true:false;
    }
}