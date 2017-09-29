<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\php\GSY\public/../application/admin\view\order\list.html";i:1506570966;}*/ ?>
<?php echo widget('Widget/header'); ?>
<!-- /头部 -->
<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Widget/left'); ?>
    <!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <a href="#">系统</a>
                </li>
                <li class="active">订单管理</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <!--<button type="button" tooltip="添加订单" class="btn btn-sm btn-azure btn-addon"-->
                    <!--onClick="javascript:window.location.href = '<?php echo url('Goods/add'); ?>'"><i class="fa fa-plus"></i> Add-->
            <!--</button>-->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="flip-scroll">
                                <table class="table table-bordered table-hover">
                                    <thead class="">
                                    <tr>
                                        <th class="text-center">订单号</th>
                                        <th class="text-center">订单总价</th>
                                        <th class="text-center">用户ID</th>
                                        <th class="text-center">订单状态</th>
                                        <th class="text-center">支付状态</th>
                                        <th class="text-center">支付方式</th>
                                        <th class="text-center">下单时间</th>
                                        <th class="text-center">更新时间</th>
                                        <th class="text-center">收货人</th>
                                        <th class="text-center">手机</th>
                                        <th class="text-center">地区</th>
                                        <th class="text-center">地址</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data as $v): ?>
                                    <tr>
                                        <td align="center"><?php echo $v['order_id']; ?></td>
                                        <td align="center"><?php echo $v['total_amount']; ?></td>
                                        <td align="center"><?php echo $v['member_id']; ?></td>
                                        <td align="center">
                                            <?php if($v['status'] == 0): ?>未发货
                                            <?php elseif($v['status'] == 1): ?>发货中
                                            <?php elseif($v['status'] == 2): ?>已完成
                                            <?php else: ?>已取消
                                            <?php endif; ?>
                                        </td>
                                        <td align="center">
                                            <?php if($v['pay_status'] == 0): ?>未支付
                                            <?php else: ?>已支付
                                            <?php endif; ?></td>
                                        <td align="center"><?php echo $v['pay_method']; ?></td>
                                        <td align="center"><?php echo date('Y-m-d H:i:s',$v['create_time']); ?></td>
                                        <td align="center"><?php echo date('Y-m-d H:i:s',$v['last_modify']); ?></td>
                                        <td align="center"><?php echo $v['ship_name']; ?></td>
                                        <td align="center"><?php echo $v['ship_mobile']; ?></td>
                                        <td align="center"><?php echo $v['ship_area']; ?></td>
                                        <td align="center"><?php echo $v['ship_address']; ?></td>
                                        <td align="center">
                                            <a href="<?php echo url('Order/edit',['order_id'=>$v['order_id']]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                            <a href="<?php echo url('Order/detail',['order_id'=>$v['order_id']]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 详情
                                            </a>
                                            <!--判断id 是不是为1，如果不是1，加删除按钮neq不等于--eq是等于-->
                                            <?php if($v['status'] == 0): ?>
                                            <a href="#" onClick="warning('确实要删除吗','<?php echo url('Order/del',['order_id'=>$v['order_id']]); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 取消
                                            </a>
                                            <?php else: ?>
                                            <a href="#" onClick="warning('确实要删除吗','<?php echo url('Order/backDel',['order_id'=>$v['order_id']]); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 撤销取消
                                            </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $data->render(); ?>
        </div>
        <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
</div>
</div>

<!--Basic Scripts-->
<script src=" __STATIC__/admin/style/jquery_002.js"></script>
<script src=" __STATIC__/admin/style/bootstrap.js"></script>
<script src=" __STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src=" __STATIC__/admin/style/beyond.js"></script>


</body></html>