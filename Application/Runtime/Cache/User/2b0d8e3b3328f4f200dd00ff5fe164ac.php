<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8" />
    <title>图书馆后台系统</title>
    <!-- Bootstrap -->
    <link href="/lib2/Public/PT/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    <script src="/lib2/Public/PT/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>

<body>
<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">前端系统</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>welcome,<?php echo ($_SESSION['username']); ?> <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?php echo U('PublicUse/Login/logout');?>">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                            <ul class="dropdown-menu" id="menu1">
                                <li>
                                    <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li>
                                            <a href="#">Reports</a>
                                        </li>
                                        <li>
                                            <a href="#">Logs</a>
                                        </li>
                                        <li>
                                            <a href="#">Errors</a>
                                        </li>
                                    </ul>
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
            <a href="<?php echo U('User/Book/index');?>"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li>
            <a href="<?php echo U('User/Book/query');?>"><i class="icon-chevron-right"></i>图书检索</a>
        </li>
        <li>
            <a href="<?php echo U('User/Book/now');?>"><i class="icon-chevron-right"></i>借阅状态</a>
        </li>
        <li>
            <a href="<?php echo U('User/Book/now');?>"><i class="icon-chevron-right"></i>续借</a>
        </li>
            
        <li>
            <a href="<?php echo U('User/Book/history');?>"><i class="icon-chevron-right"></i>借阅历史</a>
        </li>
        <li>
            <a href="<?php echo U('User/User/manage');?>"><i class="icon-chevron-right"></i>修改个人信息</a>
        </li>
        <li>
            <a href="http://ill.lib.pku.edu.cn:8090/idp/pku?cmd=ill-route"><i class="icon-chevron-right"></i>馆际互借提交申请</a>
        </li>
         <li>
            <a href="http://lib.pku.edu.cn/portal/mylib/purchase"><i class="icon-chevron-right"></i>推荐购买</a>
        </li>
         <li>
            <a href="http://ipatron.lib.pku.edu.cn/myspace?thesis=true"><i class="icon-chevron-right"></i>学位论文提交</a>
        </li>
    </ul>
</div>
<script type="text/javascript">
    
</script>

        <!--/span-->
        <div class="span9" id="content">
              
            
    <div class="row-fluid ">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">当前您的预定</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>书籍</th>
                                <th>时间</th>
                                <th>当前状态</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($data["booked"])): $i = 0; $__LIST__ = $data["booked"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($t1["num"]); ?></td>
                                    <td><?php echo ($t1["bookname"]); ?></td>
                                    <td><?php echo (date("y年m月d日h时s分",$t1["bookedtime"])); ?></td>
                                    <td>
                                        <?php if(($t1["can_borrowed"]) == "0"): ?>未归还<?php endif; ?>
                                        <?php if(($t1["can_borrowed"]) == "1"): ?>已归还，可借<?php endif; ?>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /block -->
    </div>
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">当前您的借阅</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>书籍</th>
                                <th>需归还时间</th>
                                <th>当前续借次数</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($data["borrow"])): $i = 0; $__LIST__ = $data["borrow"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($t1["num"]); ?></td>
                                    <td><?php echo ($t1["bookname"]); ?></td>
                                    <td><?php echo (date("y年m月d日h时s分",$t1["needtime"])); ?></td>
                                    <td><?php echo ($t1["xjcs"]); ?></td>
                                    <td>
                                    	<?php if(($t1["is_booked"]) == "0"): ?><a href="<?php echo U('User/Book/borrowagain',array('copyid'=>$t1['copyid']));?>" class="btn btn-success">续借</a><?php endif; ?>
                                    	<?php if(($t1["is_booked"]) == "1"): ?><a href="#" class="btn btn-danger"><i class="icon-remove"></i>已被预约</a><?php endif; ?>
                                    
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
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

    
    <link href="/lib2/Public/PT/vendors/datepicker.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/vendors/chosen.min.css" rel="stylesheet" media="screen">
    <link href="/lib2/Public/PT/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
    <script src="/lib2/Public/PT/vendors/jquery-1.9.1.js"></script>
    <script src="/lib2/Public/PT/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib2/Public/PT/vendors/jquery.uniform.min.js"></script>
    <script src="/lib2/Public/PT/vendors/chosen.jquery.min.js"></script>
    <script src="/lib2/Public/PT/vendors/bootstrap-datepicker.js"></script>
    <script src="/lib2/Public/PT/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="/lib2/Public/PT/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="/lib2/Public/PT/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script type="text/javascript" src="/lib2/Public/PT/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib2/Public/PT/assets/form-validation.js"></script>
    <script src="/lib2/Public/PT/assets/scripts.js"></script>
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