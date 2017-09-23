<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\PHPfile\GSY\public/../application/admin\view\goods\edit.html";i:1506066240;}*/ ?>
<?php echo widget('Widget/header'); ?>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Widget/left'); ?>
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <a href="#">系统</a>
                </li>
                <li>
                    <a href="<?php echo url('Goods/index'); ?>">商品管理</a>
                </li>
                <li class="active">>商品编辑</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">编辑商品</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="<?php echo url('Goods/edit'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="goods_name" class="col-sm-2 control-label no-padding-right">商品名</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="goods_name" placeholder="" name="goods_name" value="<?php echo $data['goods_name']; ?>"
                                                    required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="cate_id" class="col-sm-2 control-label no-padding-right">商品分类</label>
                                        <div class="col-sm-6">
                                            <select name="cate_id" style="width: 100%;">
                                                <option value=""><?php echo $data['name']; ?></option>
                                                <?php foreach($cateData as $v): if($v['disabled'] == 'disabled'): ?>
                                                <option value="<?php echo $v['cate_id']; ?>" disabled="disabled"><?php echo $v['name']; ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $v['cate_id']; ?>"><?php echo $v['name']; ?></option>
                                                <?php endif; endforeach; ?>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc" class="col-sm-2 control-label no-padding-right">商品简介</label>
                                        <div class="col-sm-6">
                                            <textarea name="desc" id="desc" class="form-control"><?php echo $data['desc']; ?></textarea>
                                            <img src="<?php echo $data['image_url']; ?>" alt="" width="80" height="40">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="keywords"
                                               class="col-sm-2 control-label no-padding-right">关键字</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="keywords" placeholder="" name="keywords" value="<?php echo $data['keywords']; ?>"
                                                   type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">多个关键字用逗号隔开</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="unit" class="col-sm-2 control-label no-padding-right">单位</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="unit" placeholder="" name="market_price" value="<?php echo $data['unit']; ?>"
                                                   required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="market_price" class="col-sm-2 control-label no-padding-right">市场价</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="market_price" placeholder="" name="market_price" value="<?php echo $data['market_price']; ?>"
                                                   required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="sell_price" class="col-sm-2 control-label no-padding-right">销售价</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="sell_price" placeholder="" name="sell_price" value="<?php echo $data['sell_price']; ?>"
                                                   required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="store" class="col-sm-2 control-label no-padding-right">库存</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="store" placeholder="" name="store" value="<?php echo $data['store']; ?>"
                                                   required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="maketable"
                                               class="col-sm-2 control-label no-padding-right">是否上架</label>
                                        <div class="col-xs-4">
                                            <label>
                                                <input class="checkbox-slider slider-icon yesno" name="maketable"
                                                       <?php if($data['maketable'] == 1): ?>
                                                       checked="checked" <?php endif; ?> type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-2 control-label no-padding-right">商品状态</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="status" placeholder="" name="status" value="<?php echo $data['status']; ?>"
                                                   required="" type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="content" class="col-sm-2 control-label no-padding-right">商品内容</label>
                                        <div class="col-sm-6">
                                            <textarea name="content" id="content" ><?php echo $data['content']; ?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="goods_id" value="<?php echo $data['goods_id']; ?>">
                                    <input type="hidden" name="user_id" value="1">
                                    <!--user_id为当前登录这id <?php echo \think\Request::instance()->session('admin.user_id'); ?>-->

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
</div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:700,initialFrameHeight:300});


</script>
</body>
</html>