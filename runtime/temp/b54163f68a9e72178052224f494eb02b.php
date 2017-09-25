<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\PHPfile\GSY\public/../application/admin\view\goods\list.html";i:1506301474;}*/ ?>
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
                <li class="active">商品管理</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <button type="button" tooltip="添加商品" class="btn btn-sm btn-azure btn-addon"
                    onClick="javascript:window.location.href = '<?php echo url('Goods/add'); ?>'"><i class="fa fa-plus"></i> Add
            </button>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="flip-scroll">
                                <table class="table table-bordered table-hover">
                                    <thead class="">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">商品名称</th>
                                        <th class="text-center">商品分类</th>
                                        <th class="text-center">商品封面</th>
                                        <th class="text-center">关键字</th>
                                        <th class="text-center">市场价</th>
                                        <th class="text-center">销售价</th>
                                        <th class="text-center">库存</th>
                                        <th class="text-center">是否上架</th>
                                        <th class="text-center">添加时间</th>
                                        <th class="text-center">最近更新时间</th>
                                        <th class="text-center">最后更新的人</th>
                                        <th class="text-center">活动内容</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data['data'] as $v): ?>
                                    <tr>
                                        <td align="center"><?php echo $v['goods_id']; ?></td>
                                        <td align="center"><?php echo $v['goods_name']; ?></td>
                                        <td align="center"><?php echo $v['name']; ?></td>
                                        <td align="center">
                                            <img src="<?php echo $v['image_url']; ?>" alt="" width="80" height="40">
                                        </td>
                                        <td align="center"><?php echo $v['keywords']; ?></td>
                                        <td align="center"><?php echo $v['market_price']; ?></td>
                                        <td align="center"><?php echo $v['sell_price']; ?></td>
                                        <td align="center"><?php echo $v['store']; ?></td>
                                        <td align="center"><?php echo !empty($v['maketable'])?'是':'否'; ?></td>
                                        <td align="center"><?php echo date('Y-m-d H:i:s',$v['create_time']); ?></td>
                                        <td align="center"><?php echo date('Y-m-d H:i:s',$v['last_time']); ?></td>
                                        <td align="center"><?php echo $v['username']; ?></td>
                                        <td align="center"><?php echo $v['status']; ?></td>
                                        <td align="center">
                                            <a href="<?php echo url('Image/goodsPicList',array('id'=>$v['goods_id'],'goods_name'=>$v['goods_name'])); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 图片管理
                                            </a>
                                            <a href="<?php echo url('Goods/edit',['goods_id'=>$v['goods_id']]); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                            <!--判断id 是不是为1，如果不是1，加删除按钮neq不等于--eq是等于-->
                                            <?php if($v['recycle'] == 0): ?>
                                            <a href="#" onClick="warning('确实要删除吗','<?php echo url('Goods/del',['goods_id'=>$v['goods_id']]); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
                                            </a>
                                            <?php else: ?>
                                            <a href="#" onClick="warning('确实要删除吗','<?php echo url('Goods/backDel',['goods_id'=>$v['goods_id']]); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 撤销删除
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