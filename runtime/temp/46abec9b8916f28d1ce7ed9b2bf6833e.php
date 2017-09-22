<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"E:\PHP\GSY\public/../application/admin\view\member\list.html";i:1506060005;}*/ ?>
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
                    <li class="active">会员管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url("Member/addMember"); ?>'"><i class="fa fa-plus"></i>
                    添加会员
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
                                            <th class="text-center">用户名</th>
                                            <th class="text-center">手机号</th>
                                            <th class="text-center">邮箱</th>
                                            <th class="text-center">登录IP</th>
                                            <th class="text-center">头像</th>
                                            <th class="text-center">是否冻结</th>
                                            <th class="text-center">登录次数</th>
                                            <th class="text-center">登录时间</th>
                                            <th class="text-center">最近更新时间</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $val): ?>
                                        <tr>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['member_id']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['username']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['mobile']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['email']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['ip']; ?></td>
                                            <td align="center" style="vertical-align: middle">
                                                <img src="<?php echo $val['pic']; ?>" width="100" height="100"/>
                                            </td>
                                            <td align="center" style="vertical-align: middle">
                                                <?php if($val['lock'] == 0): ?>正常<?php elseif($val['lock'] == 1): ?>冻结<?php else: ?>永久冻结<?php endif; ?>
                                            </td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['login_count']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['login_time']; ?></td>
                                            <td align="center" style="vertical-align: middle"><?php echo $val['last_modify']; ?></td>
                                            <td align="center" style="vertical-align: middle">
                                                <a href="<?php echo url('Member/edit',array('member_id'=>$val['member_id'])); ?>"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url("Member/del",['member_id'=>$val['member_id']]); ?>')"
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
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body>
</html>