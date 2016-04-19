<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <title>图书馆后台系统</title>
    <!-- Bootstrap -->
    <link href="/lib2/Public/HT/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    <script src="/lib2/Public/HT/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>

<body>
<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo U('Home/Index/index');?>"><img id="logo" src="/lib2/Public/HT/images/logo.png" alt="boya">博雅图书馆</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>welcome,<?php echo ($_SESSION['username']); ?> <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="<?php echo U('Admin/User/detail_view',array('id'=>$_SESSION['id']));?>">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?php echo U('PublicUse/Login/logout');?>">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                            <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a href="<?php echo U('Admin/Book/bookandpeople');?>">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                  
                                </li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="active">
            <a href="<?php echo U('Admin/Book/query');?>"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li>
            <a href="<?php echo U('Admin/User/add');?>"><i class="icon-chevron-right"></i>新用户注册</a>
        </li>
        <li>
            <a href="<?php echo U('Admin/User/manage');?>"><i class="icon-chevron-right"></i>用户管理</a>
        </li>
            
        <li>
            <a href="<?php echo U('Admin/Book/add');?>"><i class="icon-chevron-right"></i>图书录入</a>
        </li>
        <li>
            <a href="<?php echo U('Admin/Book/query');?>"><i class="icon-chevron-right"></i>图书查询</a>
        </li>
        <li>
            <a href="<?php echo U('Admin/Book/manage');?>"><i class="icon-chevron-right"></i>图书修改</a>
        </li>
        
    </ul>
</div>
<script type="text/javascript">
    
</script>

        <!--/span-->
        <div class="span9" id="content">
              
            
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">新用户登记</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <!-- BEGIN FORM-->
                    <form action="<?php echo U('Admin/User/add_user');?>" id="form_sample_1" class="form-horizontal" method="post">
                        <fieldset>
                            <div class="alert alert-error hide">
                                <button class="close" data-dismiss="alert"></button>
                                对不起，不能提交表单，你有一些错误
                            </div>
                            <div class="alert alert-success hide">
                                <button class="close" data-dismiss="alert"></button>
                                表单正在提交，请稍等
                            </div>
                            <div class="control-group">
                                <label class="control-label">ID<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="id" data-required="1" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">姓名<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="name" type="text" class="span6 m-wrap" />
                                    <span class="help-block">e.g: 闫张增</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">院系<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="depart" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="email" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">性别<span class="required">*</span></label>
                                <div class="controls">
                                    <select class="span6 m-wrap" name="gender">
                                        <option value="">Select...</option>
                                        <option value="1">男</option>
                                        <option value="2">女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">角色<span class="required">*</span></label>
                                <div class="controls">
                                    <select class="span6 m-wrap" name="role">
                                    <option value="">Select...</option>
                                        <option value="1">学生</option>
                                        <option value="2">教师</option>
                                        <option value="3">管理员</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="date">出生日期</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge datepicker" id="date" data-date-format="yyyy-mm-dd" name='date' value="2013/01/02">
                                   	
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">密码<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="password" type="password" class="span6 m-wrap" id="password"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">再次输入密码<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="password2" type="password" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="controls">
                                <button type="submit" class="btn btn-primary">提交</button>
                                <button type="button" class="btn">取消</button>
                            </div>
                        </fieldset>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>

        </div>
    </div>
    
    <div class="row"></div>
    <footer>
        <hr/>
        <p>&copy; DBcourse 闫张增小组2015春</p>
    </footer>
</div>
<!--/.fluid-container-->

    
    <link href="/lib2/Public/HT/vendors/datepicker.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/vendors/chosen.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/HT/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
    <script src="/lib2/Public/HT/vendors/jquery-1.9.1.js"></script>
    <script src="/lib2/Public/HT/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib2/Public/HT/vendors/jquery.uniform.min.js"></script>
    <script src="/lib2/Public/HT/vendors/chosen.jquery.min.js"></script>
    <script src="/lib2/Public/HT/vendors/bootstrap-datepicker.js"></script>
    <script src="/lib2/Public/HT/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="/lib2/Public/HT/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="/lib2/Public/HT/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="/lib2/Public/HT/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib2/Public/HT/assets/form-validation.js"></script>
    <script src="/lib2/Public/HT/assets/scripts.js"></script>
    <script>
    jQuery(document).ready(function() {
        FormValidation.init();
    });


    $(function() {
        $(".datepicker").datepicker();
        $(".uniform_on").uniform();
        $(".chzn-select").chosen();
        $('.textarea').wysihtml5();

    });
    </script>

</body>

</html>