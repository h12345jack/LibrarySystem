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
                            <legend class="">图书详情</legend>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                            <!-- Button -->
                            <div class="controls">
                            </div>
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
                        <div class="block-content collapse in">
                            <div class="row" style="padding:20px;border-top:1px solid black">
                                <div class="span2"></div>
                                <div class="span8">
                                    <table border="0" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="4"><?php echo ($data['book']["title"]); if(($data['book']["is_booked"]) == "1"): ?>[已被预约]<?php endif; ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="6">
                                                    <img src="/lib2/Uploads/<?php echo ($data['book']["cover"]); ?>" width="130" height="130" class="img-polaroid" />
                                                </td>
                                                <td class="span2">著者：</td>
                                                <td colspan="2">
                                                    <?php if(is_array($data['book']['author'])): $i = 0; $__LIST__ = $data['book']['author'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t2): $mod = ($i % 2 );++$i; echo ($t2["name"]); ?>--(<?php echo ($t2["country"]); ?>)&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
                                                </td>
                                            </tr>
                                            <tr class="error">
                                                <td>译者：</td>
                                                <td colspan="2">
                                                    <?php if(is_array($data['book']['tranlator'])): $i = 0; $__LIST__ = $data['book']['tranlator'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t2): $mod = ($i % 2 );++$i; echo ($t2["name"]); ?>--(<?php echo ($t2["country"]); ?>)&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
                                                </td>
                                            </tr>
                                            <tr class="success">
                                                <td>出版信息：</td>
                                                <td colspan="2"><?php echo ($data['book']["publisher"]); ?>,<?php echo ($data['book']["publish_year"]); ?></td>
                                            </tr>
                                            <tr class="error">
                                                <td>isbn</td>
                                                <td colspan="2"><?php echo ($data['book']["isbn"]); ?></td>
                                            </tr>
                                            <tr class="success">
                                                <td>分类号</td>
                                                <td colspan="2"><?php echo ($data['book']["type"]); ?></td>
                                            </tr>
                                            <tr class="info">
                                                <td>价格</td>
                                                <td colspan="2"><?php echo ($data['book']["price"]); ?></td>
                                            </tr>
                                            <tr class="info">
                                                <td colspan="4"><?php echo (htmlspecialchars_decode($data['book']['abstract'])); ?></td>
                                            </tr>
                                            <form action="<?php echo U('Admin/Book/borrow2');?>" method="post">
                                            <?php if(is_array($data['copy'])): $i = 0; $__LIST__ = $data['copy'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><tr>
                                                        <td  colspan="3">副本号：<?php echo ($t1["copyid"]); ?></td>
                                                        <td rowspan="2">
                                                            <?php if(($t1["is_borrowed"]) == "1"): ?><a class="btn btn-danger" href="<?php echo U('Admin/Book/returnbook123',array('id'=>$t1['copyid']));?>"><i class="icon-remove icon-white"></i>还书</a><?php endif; ?>
                                                            
                                                            <input type="hidden" name="bookid" value="<?php echo ($data[book]["id"]); ?>" />
                                                            <input type="hidden" name="iid" id="dll" />
                                                        </td>
                                                    </tr>
                                                    <tr class="success">
                                                    <td colspan="2" >
                                                            <?php if(($t1["is_borrowed"]) == "1"): echo ($t1["borrowpeople"]); ?>于<?php echo (date("y-m-d",$t1["borrowtime"])); ?>借走该书<?php endif; ?>
                                                            <?php if(($t1["is_borrowed"]) == "0"): ?>当前状态可借<?php endif; ?>
                                                        </td>
                                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                            <?php if(($data['book']['can_borrow']) == "1"): ?><tr>
                                                <td colspan="2">
                                                
                                                    <input type="text" name="id" placeholder="输入借阅人的学号" value="" />
                                                    <label class="result" class="text-warning"> </label>

                                                </td>
                                                <td colspan="2">
                                                
                                                    <a class="btn btn-success jy"><i class="icon-pencil icon-white"></i>借阅</a><input type="hidden" name="copyid" value="<?php echo ($t1["copyid"]); ?>" />
                                                       
                                                </td>
                                            </tr><?php endif; ?>
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    $(".jy").click(function(event) {

        event.preventDefault();
        var id1 = $.trim($("input[name='id']").val());

        var requestData = {
            id: id1,
        };
        $.ajax({
                url: '<?php echo U('Admin/User/is_exist');?>',
                type: 'POST',
                data: requestData,
            })
            .done(function(data) {
                // alert(data);

                if (!isNaN(data)) {
                    $('#dll').val(data);
                    $('form').submit();
                } else {
                    $('.result').html(data);
                }

            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });


    });
    </script>

</body>

</html>