<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: lenovo
 * Date: 2017/9/22
 * Time: 14:11
 */
namespace app\index\widget;
use think\Controller;

class Widget extends Controller{
    public function header(){
        return $this->fetch('Widget/header');
    }
    public function footer(){
        return $this->fetch('Widget/footer');
    }
}
=======
 * User: asus
 * Date: 2017/9/22
 * Time: 10:16
 */
namespace app\index\widget;
use think\Controller;
class Widget extends Controller{

    public function header(){
        return $this->fetch('widget/header');
    }

    public function footer(){
        return $this->fetch('widget/footer');
    }
}
>>>>>>> b6409ebe7a7a59ef451c2ab8e2bfa4398dacca54
