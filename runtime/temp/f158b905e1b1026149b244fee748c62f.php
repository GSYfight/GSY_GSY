<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\PHPfile\GSY\public/../application/admin\view\admin\list.html";i:1506037695;}*/ ?>
<?php echo widget('Widget/header'); ?>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <?php echo widget('Widget/left'); ?>
        </ul>
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
                <li class="active">用户管理</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">

            <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                    onClick="javascript:window.location.href = '<?php echo url('Admin/add'); ?>'"><i class="fa fa-plus"></i> Add
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
                                        <th class="text-center">用户IP</th>
                                        <th class="text-center">用户名称</th>
                                        <th class="text-center">密码</th>
                                        <th class="text-center">创建时间</th>
                                        <th class="text-center">登录次数</th>
                                        <th class="text-center">是否冻结</th>
                                        <th class="text-center">权限级别</th>
                                        <th class="text-center">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data as $val): ?>
                                    <tr>
                                        <td align="center"><?php echo $val['user_id']; ?></td>
                                        <td align="center"><?php echo $val['ip']; ?></td>
                                        <td align="center"><?php echo $val['username']; ?></td>
                                        <td align="center"><?php echo $val['password']; ?></td>
                                        <td align="center"><?php echo date("y-m-d H:i:s",$val['creat_time']); ?></td>
                                        <td align="center"><?php echo $val['login_time']; ?></td>
                                        <td align="center">
                                            <?php if($val['lock'] == 0): ?>
                                             否
                                            <?php else: ?>
                                            是
                                            <?php endif; ?>
                                        </td>
                                        <td align="center"><?php echo $val['limit']; ?></td>
                                        <td align="center">
                                            <a href='<?php echo url('Admin/edit',array('user_id'=>$val['user_id'])); ?>' class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                            </a>
                                            <?php if($val['username'] != "admin"): ?>
                                            <a href="#" onClick="warning('确实要删除吗', '<?php echo url('Admin/del',array('user_id'=>$val['user_id'])); ?>')"
                                               class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
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
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>