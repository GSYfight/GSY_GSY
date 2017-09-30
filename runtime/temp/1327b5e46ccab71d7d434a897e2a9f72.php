<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\php\GSY\public/../application/admin\view\order\edit.html";i:1506667798;}*/ ?>
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
                                <span class="widget-caption">编辑订单</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="<?php echo url('Order/upd'); ?>"
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
                                            <label for="status"
                                                   class="col-sm-2 control-label no-padding-right">订单状态</label>
                                            <div class="col-sm-6">
                                                <select name="status" style="width: 100%;">
                                                    <option value="<?php echo $data['status']; ?>"><?php if($data['status'] == 0): ?>未发货
                                                        <?php elseif($data['status'] == 1): ?>发货中
                                                        <?php elseif($data['status'] == 2): ?>已完成
                                                        <?php else: ?>已取消
                                                        <?php endif; ?>
                                                    </option>
                                                    <?php if($data['status'] == 0): ?>
                                                    <option value="1">发货中</option>
                                                    <option value="2">已完成</option>
                                                    <option value="3">已取消</option>
                                                    <?php elseif($data['status'] == 1): ?>
                                                    <option value="0">未发货</option>
                                                    <option value="2">已完成</option>
                                                    <option value="3">已取消</option>
                                                    <?php elseif($data['status'] == 2): ?>
                                                    <option value="0">未发货</option>
                                                    <option value="1">发货中</option>
                                                    <option value="3">已取消</option>
                                                    <?php else: ?>
                                                    <option value="0">未发货</option>
                                                    <option value="1">发货中</option>
                                                    <option value="2">已完成</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="pay_status"
                                                   class="col-sm-2 control-label no-padding-right">是否付款</label>
                                            <div class="col-sm-6">
                                                <select name="pay_status" style="width: 100%;">
                                                    <option value="<?php echo $data['pay_status']; ?>"><?php if($data['pay_status']
                                                        == 0): ?>未付款
                                                        <?php else: ?>已付款
                                                        <?php endif; ?>
                                                    </option>
                                                    <?php if($data['pay_status'] == 0): ?>
                                                    <option value="1">已付款</option>
                                                    <?php else: ?>
                                                    <option value="0">未付款</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="ship_name"
                                                   class="col-sm-2 control-label no-padding-right">收货人</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ship_name" placeholder=""
                                                       name="ship_name" value="<?php echo $data['ship_name']; ?>"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="ship_mobile"
                                                   class="col-sm-2 control-label no-padding-right">手机号</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ship_mobile" placeholder=""
                                                       name="ship_mobile" value="<?php echo $data['ship_mobile']; ?>"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="ship_area"
                                                   class="col-sm-2 control-label no-padding-right">地区</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ship_area" placeholder=""
                                                       name="ship_area" value="<?php echo $data['ship_area']; ?>"
                                                       required="" type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="ship_address"
                                                   class="col-sm-2 control-label no-padding-right">地址</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="ship_address" placeholder=""
                                                       name="ship_address" value="<?php echo $data['ship_address']; ?>"
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