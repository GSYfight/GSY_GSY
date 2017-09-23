<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\php\GSY\public/../application/admin\view\image\list.html";i:1506069787;}*/ ?>
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
                <li class="active">图片管理</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <button type="button" tooltip="添加图片" class="btn btn-sm btn-azure btn-addon"
                    onClick="javascript:window.location.href = '<?php echo url('Image/add'); ?>'"><i class="fa fa-plus"></i> Add
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
                                        <th class="text-center">商品ID</th>
                                        <th class="text-center">商品名称</th>
                                        <th class="text-center">图片</th>
                                        <th class="text-center">是否封面</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data as $v): ?>
                                    <tr>
                                        <td align="center"><?php echo $v['image_id']; ?></td>
                                        <td align="center"><?php echo $v['goods_id']; ?></td>
                                        <td align="center"><?php echo $v['goods_name']; ?></td>
                                        <td align="center">
                                            <img src="<?php echo $v['image_url']; ?>" alt="" width="80" height="40">
                                        </td>
                                        <td align="center">
                                            <!--判断是否为封面-->
                                            <?php if($v['is_face'] == 1): ?>
                                            是
                                            <?php else: ?>
                                            <a href="<?php echo url('Image/isFace',['image_id'=>$v['image_id'],'goods_id'=>$v['goods_id']]); ?>">否</a>
                                            <?php endif; ?>
                                        </td>
                                        <td align="center">
                                            <a href="#" onClick="warning('确实要删除吗', '<?php echo url('Image/del',array('id'=>$v['image_id'])); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
                                            </a>
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