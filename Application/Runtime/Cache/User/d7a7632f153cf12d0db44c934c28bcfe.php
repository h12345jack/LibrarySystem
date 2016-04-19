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
            <div class="row-fluid">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4> The operation completed successfully</div>
                <div class="navbar">
                    <div class="navbar-inner">
                        <ul class="breadcrumb">
                            <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                            <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                            <li>
                                <a href="#">Dashboard</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="#">Settings</a> <span class="divider">/</span>
                            </li>
                            <li class="active">Tools</li>
                        </ul>
                    </div>
                </div>
            </div>
            <--!这里开始的铜须门!-->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Statistics</div>
                        <div class="pull-right"><span class="badge badge-warning">View More</span>
                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span3">
                            <div class="chart" data-percent="73">73%</div>
                            <div class="chart-bottom-heading"><span class="label label-info">Visitors</span>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="chart" data-percent="53">53%</div>
                            <div class="chart-bottom-heading"><span class="label label-info">Page Views</span>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="chart" data-percent="83">83%</div>
                            <div class="chart-bottom-heading"><span class="label label-info">Users</span>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="chart" data-percent="13">13%</div>
                            <div class="chart-bottom-heading"><span class="label label-info">Orders</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Users</div>
                            <div class="pull-right"><span class="badge badge-info">1,234</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Vincent</td>
                                        <td>Gabriel</td>
                                        <td>@gabrielva</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
                <div class="span6">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Orders</div>
                            <div class="pull-right"><span class="badge badge-info">752</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Coat</td>
                                        <td>02/02/2013</td>
                                        <td>$25.12</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacket</td>
                                        <td>01/02/2013</td>
                                        <td>$335.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Shoes</td>
                                        <td>01/02/2013</td>
                                        <td>$29.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Clients</div>
                            <div class="pull-right"><span class="badge badge-info">17</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Vincent</td>
                                        <td>Gabriel</td>
                                        <td>@gabrielva</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
                <div class="span6">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Invoices</div>
                            <div class="pull-right"><span class="badge badge-info">812</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>02/02/2013</td>
                                        <td>$25.12</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>01/02/2013</td>
                                        <td>$335.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>01/02/2013</td>
                                        <td>$29.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Gallery</div>
                        <div class="pull-right"><span class="badge badge-info">1,462</span>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; Vincent Gabriel 2013</p>
    </footer>
</div>
<!--/.fluid-container-->

    
        <script src="/lib2/Public/PT/vendors/jquery-1.9.1.min.js"></script>
    <script src="/lib2/Public/PT/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib2/Public/PT/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="/lib2/Public/PT/assets/scripts.js"></script>

        
    
</body>

</html>