<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"E:\PHP\GSY\public/../application/admin\view\member\edit.html";i:1506052135;}*/ ?>
<?php echo widget('widget/header'); ?>
<!-- /头部 -->
<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('widget/left'); ?>
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
                        <a href="<?php echo url('Member/index'); ?>">会员列表</a>
                    </li>
                    <li class="active">修改会员信息</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">修改会员信息</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo url('Member/edit',['member_id'=>$dataById['member_id']]); ?>"
                                          method="post">
                                        <div class="form-group">
                                            <label for="username"
                                                   class="col-sm-2 control-label no-padding-right">用户名</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="username" placeholder="" name="username"
                                                       required="" type="text" value="<?php echo $dataById['username']; ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="password"
                                                   class="col-sm-2 control-label no-padding-right">密码</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="password" placeholder="" name="password"
                                                        type="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile"
                                                   class="col-sm-2 control-label no-padding-right">手机号</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="mobile" placeholder="" name="mobile"
                                                        type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email"
                                                   class="col-sm-2 control-label no-padding-right">Email</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="email" placeholder="" name="email"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pic"
                                                   class="col-sm-2 control-label no-padding-right">头像</label>
                                            <div class="col-sm-6">
                                                <input type="file" name="pic" id="pic">
                                                <img src="" id="picAdd"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lock"
                                                   class="col-sm-2 control-label no-padding-right">头像</label>
                                            <div class="col-sm-6">
                                                <select name="lock" id="lock">
                                                    <?php foreach([0,1,2] as $val): ?>
                                                    <option value="<?php echo $val; ?>" <?php if($val==$dataById): ?>selected="selected"<?php endif; ?>><?php if($val == 0): ?>正常<?php elseif($val == 1): ?>冻结<?php else: ?>永久冻结<?php endif; ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
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