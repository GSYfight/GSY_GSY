<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\php\GSY\public/../application/admin\view\order\detail.html";i:1506671127;}*/ ?>
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
                                        <th class="text-center">用户ID</th>
                                        <th class="text-center">商品</th>
                                        <th class="text-center">单价</th>
                                        <th class="text-center">数量</th>
                                        <th class="text-center">金额</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['data'] as $v): ?>
                                    <tr>
                                        <td align="center"><?php echo $v['order_id']; ?></td>
                                        <td align="center"><?php echo $v['member_id']; ?></td>
                                        <td align="center"><?php echo $v['goods_name']; ?></td>
                                        <td align="center"><?php echo $v['sell_price']; ?></td>
                                        <td align="center"><?php echo $v['goods_num']; ?></td>
                                        <td align="center"><?php echo $v['subtotal']; ?></td>
                                        <td align="center">
                                            <!--<a href="<?php echo url('Order/edit',['order_id'=>$v['order_id']]); ?>" class="btn btn-primary btn-sm shiny">-->
                                                <!--<i class="fa fa-edit"></i> 编辑-->
                                            <!--</a>-->
                                            <!--<a href="<?php echo url('Order/detail',['order_id'=>$v['order_id']]); ?>" class="btn btn-primary btn-sm shiny">-->
                                                <!--<i class="fa fa-edit"></i> 删除-->
                                            <!--</a>-->
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"><b>运费:</b></td>
                                        <td align="center"><b><?php echo $data['freight']; ?></b></td>
                                        <td align="center">
                                            <a href="<?php echo url('Order/change',['order_id'=>$v['order_id'],'status'=>1]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"><b>总价:</b></td>
                                        <td align="center"><b><?php echo $data['total_amount']; ?></b></td>
                                        <td align="center">
                                            <a href="<?php echo url('Order/change',['order_id'=>$v['order_id'],'status'=>2]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $data['page']; ?>
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