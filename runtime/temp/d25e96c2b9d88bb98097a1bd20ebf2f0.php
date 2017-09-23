<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"F:\php\GSY\public/../application/admin\view\image\add.html";i:1506130341;}*/ ?>
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
                    <a href="<?php echo url('Image/index'); ?>">图片管理</a>
                </li>
                <li class="active">>图片列表</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">新增图片</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="<?php echo url('Image/add'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="cate_id" class="col-sm-2 control-label no-padding-right">商品选择</label>
                                        <div class="col-sm-6">
                                            <select name="goods_id" style="width: 100%;">
                                                <option value="">--请选择--</option>
                                                <?php foreach($goodsData as $v): ?>
                                                <option value="<?php echo $v['goods_id']; ?>"><?php echo $v['goods_id'].'.'.$v['goods_name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_url" class="col-sm-2 control-label no-padding-right">图片</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image_url" id="image_url">
                                            <img src="" id="image" alt="" width="100">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="is_face"
                                               class="col-sm-2 control-label no-padding-right">是否封面</label>
                                        <div class="col-xs-4">
                                            <label>
                                                <input class="checkbox-slider slider-icon yesno" name="is_face"
                                                       checked="checked" type="checkbox">
                                                <span class="text"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--user_id为当前登录这id-->
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
<script>
//    图片预览
    $("#image_url").change(function(e) {
        for (var i = 0; i < e.target.files.length; i++) {
            var file = e.target.files.item(i);
            var freader = new FileReader();
            freader.readAsDataURL(file);
            freader.onload = function(e) {
                var src = e.target.result;
                $("#image").attr("src",src);
            }
        }
    });
</script>
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:700,initialFrameHeight:300});


</script>
</body>
</html>