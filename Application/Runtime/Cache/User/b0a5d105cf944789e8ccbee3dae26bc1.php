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
        
    <link href="/lib2/Public/PT/assets/DT_bootstrap.css" rel="stylesheet" media="screen">

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
              
            
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">用户列表123</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <th class="center">
                                ID
                            </th>
                            <th>用户名</th>
                            <th>院系</th>
                            <th>角色</th>
                            <th>可借数量</th>
                            <th>剩余金额</th>
                            <th>操作</th>
                        </thead>
                        <tbody>
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($t1["id"]); ?></td>
                                    <td>
                                        <?php echo ($t1["name"]); ?>
                                    </td>
                                    <td><?php echo ($t1["depart"]); ?></td>
                                    <td>
                                        <?php switch($t1["role"]): case "1": ?><span class="label label-sm label-warning">
                                                            同学
                                                        </span><?php break;?>
                                            <?php case "2": ?><span class="label label-sm label-sucess">
                                                            教师
                                                        </span><?php break;?>
                                            <?php default: ?>
                                            <span class="label label-sm label-inverse arrowed-in">
                                                            管理员</span><?php endswitch;?>
                                    </td>
                                    <td><?php echo ($t1["book_num"]); ?></td>
                                    <td><?php echo ($t1["credit"]); ?></td>
                                    <td>
                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="<?php echo U('User/User/detail_view',array('id'=>$t1['id']));?>">
                                                <i class="icon-zoom-in bigger-130"></i>
                                            </a>
                                            <a class="green" href="<?php echo U('User/User/detail_view',array('id'=>$t1['id']));?>">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>
                                            <a class="red" href="<?php echo U('User/User/delete_user',array('id'=>$t1['id']));?>">
                                                <i class="icon-trash bigger-130"></i>
                                            </a>
                                        </div>
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

    
    <script src="/lib2/Public/PT/vendors/jquery-1.9.1.js"></script>
    <script src="/lib2/Public/PT/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib2/Public/PT/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/lib2/Public/PT/assets/scripts.js"></script>
    <script src="/lib2/Public/PT/assets/DT_bootstrap.js"></script>
    <script>
    $(function() {

    });
    </script>

</body>

</html>