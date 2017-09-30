<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\php\GSY\public/../application/admin\view\order\change.html";i:1506671376;}*/ ?>
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
                        <a href="<?php echo url('Order/index'); ?>">订单管理</a>
                    </li>
                    <li class="active">>订单编辑</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">编辑总价</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="<?php echo url('Order/change'); ?>"
                                          method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="order_id" class="col-sm-2 control-label no-padding-right">订单号</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="order_id" placeholder="<?php echo $data['order_id']; ?>"
                                                       readonly="readonly" name="order_id" value="<?php echo $data['order_id']; ?>"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_amount" class="col-sm-2 control-label no-padding-right">订单总价</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="total_amount" name="total_amount"
                                                       value="<?php echo $data['total_amount']; ?>"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="freight" class="col-sm-2 control-label no-padding-right">运费</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="freight" name="freight"
                                                       value="<?php echo $data['freight']; ?>"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
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
    UE.getEditor('content', {initialFrameWidth: 700, initialFrameHeight: 300});


</script>
</body>
</html>