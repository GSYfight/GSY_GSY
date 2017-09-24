<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2017/9/19
 * Time: 23:11
 */
namespace app\admin\controller;
use think\Controller;
class Error extends Controller{
    public function _empty(){
        return '<html>  
 <head><title>404 Not Found</title></head>  
 <body bgcolor="white">  
 <center><h1>404 Not Found</h1></center>  
 <hr>
 </body>  
 </html>';
    }
}