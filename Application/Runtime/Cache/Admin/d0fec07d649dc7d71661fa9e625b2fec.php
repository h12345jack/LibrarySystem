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
        
    <link href="/lib2/Public/HT/assets/DT_bootstrap.css" rel="stylesheet" media="screen">

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
                <div class="muted pull-left">图书</div>
            </div>
            <div class="block-content collapse in">
                <form class="form-horizontal" action="<?php echo U('Admin/Book/find_book');?>">
                    <fieldset>
                        <div id="legend" class="">
                            <legend class="">图书检索</legend>
                        </div>
                         <div class="control-group">
                            <label class="control-label"></label>
                            <p class="span6"><img src="http://localhost/lib2/Public/images/logo1.jpg"/>
                            </p>
                        </div>
                        <div class="control-group">
                            <!-- Search input-->
                            <div class="controls">
                                <input type="text" placeholder="输入您想要查找的内容" class="input-xlarge focused span6" name="term" />
                                <select class="input-xlarge span2" name="query">
                                    <option value="2">标题</option>
                                    <option value="1">书号</option>
                                    <option value="3">作者</option>
                                    <option value="4">出版年</option>
                                    <option value="5">出版社</option>
                                    <option value="6">摘要</option>
                                    <option value="7">不限</option>
                                </select>
                                <input class="btn btn-primary" type="submit" value="检索" />
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><?php echo ($result); ?></div>
                        </div>

                        <div class="block-content collapse in">
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><div class="row" style="padding:20px;border-top:1px solid black">
                                    <div class="span2"><span class="badge badge-success pull-right"><?php echo ($t1["num"]); ?></span></div>
                                    <div class="span8">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="3"><a href="<?php echo U('Admin/Book/detail_borrow',array('id'=>$t1['id']));?>"><?php echo ($t1["title"]); ?></a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="5" class="span3">
                                                        <img src="/lib2/Uploads/<?php echo ($t1["cover"]); ?>" width="130" height="130" class="img-polaroid" />
                                                    </td>
                                                    <td class="span2">著者</td>
                                                    <td>
                                                        <?php if(is_array($t1['author'])): $i = 0; $__LIST__ = $t1['author'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t2): $mod = ($i % 2 );++$i; echo ($t2["name"]); ?>--(<?php echo ($t2["country"]); ?>)&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </td>
                                                </tr>
                                                <tr class="error">
                                                    <td>译者</td>
                                                    <td>
                                                        <?php if(is_array($t1['tranlator'])): $i = 0; $__LIST__ = $t1['tranlator'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t2): $mod = ($i % 2 );++$i; echo ($t2["name"]); ?>--(<?php echo ($t2["country"]); ?>)&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </td>
                                                </tr>
                                                <tr class="success">
                                                    <td>出版</td>
                                                    <td><?php echo ($t1["publisher"]); ?>,<?php echo ($t1["publish_year"]); ?></td>
                                                </tr>
                                                <tr class="error">
                                                    <td>isbn</td>
                                                    <td><?php echo ($t1["isbn"]); ?></td>
                                                </tr>
                                                <tr class="sucess">
                                                    <td>分类号</td>
                                                    <td><?php echo ($t1["type"]); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php echo ($page); ?>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
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

    
    <script src="/lib2/Public/HT/vendors/jquery-1.9.1.js"></script>
    <script src="/lib2/Public/HT/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib2/Public/HT/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/lib2/Public/HT/assets/scripts.js"></script>
    <script src="/lib2/Public/HT/assets/DT_bootstrap.js"></script>
    <script>
    $(function() {

    });
    </script>

</body>

</html>