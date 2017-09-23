<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"E:\PHP\GSY\public/../application/admin\view\cate\list.html";i:1505992434;}*/ ?>
<?php echo widget('Widget/header'); ?>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Widget/left'); ?>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li class="active">分类管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url("Cate/addCate"); ?>'"><i class="fa fa-plus"></i>
                    添加分类
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
                                            <th class="text-center">分类名称</th>
                                            <th class="text-center">pid</th>
                                            <th class="text-center">path</th>
                                            <th class="text-center">level</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $val): ?>
                                        <tr>
                                            <td align="center"><?php echo $val['cate_id']; ?></td>
                                            <td><?php echo $val['name']; ?></td>
                                            <td align="center"><?php echo $val['pid']; ?></td>
                                            <td align="center"><?php echo $val['path']; ?></td>
                                            <td align="center"><?php echo $val['level']; ?></td>
                                            <td align="center">
                                                <a href="<?php echo url('Cate/edit',array('cate_id'=>$val['cate_id'])); ?>"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url("Cate/del",['cate_id'=>$val['cate_id']]); ?>')"
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
                <?php echo $page; ?>
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


</body>
</html>