<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\PHPfile\GSY\public/../application/admin\view\admin\add.html";i:1505965791;}*/ ?>
<?php echo widget('Widget/header'); ?>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
            <?php echo widget('Widget/left'); ?>

                    <li>
                        <a href="http://www.chuanke.com/s2260700.html" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">视频教程</span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>

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
                                        <li>
                        <a href="<?php echo url('Admin/index'); ?>">用户管理</a>
                    </li>
                                        <li class="active">添加用户</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增用户</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <!--action方式提交到Admin下的add方法-->
                    <form class="form-horizontal" role="form" action="<?php echo url('Admin/add'); ?>" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">用户名</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="username" placeholder="" name="username" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label no-padding-right">密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="password" placeholder="" name="password" required="" type="text">
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
    


</body></html>