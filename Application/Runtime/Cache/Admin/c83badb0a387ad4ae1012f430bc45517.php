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
                <div class="muted pull-left">新书录入</div>
            </div>
            <div class="block-content collapse in">
                <!-- BEGIN FORM-->
                <div class="span12">
                    <form action="<?php echo U('Admin/Book/add_book');?>" id="form_sample_1" class="form-horizontal" method="post">
                        <fieldset>
                            
                            <div class="control-group">
                                <label class="control-label">封面<span class="required">*</span></label>
                                <div class="controls span5">
                                    <img id="img" src="/lib2/ThinkPHP/logo.png" width="130" height="130" border="0" />
                                    <hr/>
                                    <input id="file_upload" name="file_upload" type="file" enctype="multipart/form-data" multiple="true" value="" />
                                    <input id="upload" name="upload" type="hidden" value="ThinkPHP/logo.png" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">标题<span class="required">*</span></label>
                                <div class="controls span5">
                                    <input name="title" type="text" class="span6 m-wrap" />
                                    <span class="help-block">e.g:穆斯林的葬礼</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="date">出版时间</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="date" data-date-format="yyyy" name='date' value="2015">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">出版社<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="publisher" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">ISBN<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="isbn" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">分类号<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="type" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">书的价格<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="price" type="text" class="span6 m-wrap" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">书的数量<span class="required">*</span></label>
                                <div class="controls">
                                    <button type="button" id="plus1" class="btn btn-warning">+</button>
                                    <input name="number" type="text" id="number" class="span1 m-wrap text-center" value="1" />
                                    <button type="button" id="plus2" class="btn btn-warning"> -</button>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="span8" id="content">
                                        <div class="row-fluid">
                                            <!-- block -->
                                            <div class="block">
                                                <div class="navbar navbar-inner block-header">
                                                    <div class="muted pull-left">摘要</div>
                                                </div>
                                                <div class="block-content collapse in">
                                                    <textarea id="ckeditor_standard" name="abstract" ></textarea>
                                                </div>
                                            </div>
                                            <!-- /block -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="span8">
                                        <div class="block">
                                            <div class="navbar navbar-inner block-header">
                                                <div class="muted pull-left">作者1</div>
                                            </div>
                                            <div class="block-content collapse in">
                                                <div class="span12">
                                                    姓名：
                                                    <input name="creatorname1" type="text" id="creatorname1" class="span2 m-wrap text-center" value="" /> 国籍：
                                                    <input name="creatorcountry1" type="text" class="span2 m-wrap text-center" value="中国" /> 出生：
                                                    <input type="text" class="span2 m-wrap text-center" data-date-format="yyyy" name='creatordate1' value="2015">
                                                    <hr/> 身份：
                                                    <input name="creatorrole1" value="1" type="radio" checked/> <span class="lbl">作者</span>
                                                    <input name="creatorrole1" value="2" type="radio" /> <span class="lbl">译者</span>
                                                    <hr/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="button" class="btn  btn-danger more">+填加更多作者</button>
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
    <script type="text/javascript" src="/lib2/Public/HT/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib2/Public/HT/assets/form-validation1.js"></script>
    <link rel="stylesheet" href="/lib2/Public/HT/uploadify/uploadify.css">
    <script src="/lib2/Public/HT/assets/scripts.js"></script>
    <script src="/lib2/Public/HT/uploadify/jquery.uploadify.js"></script>
    <script src="/lib2/Public/HT/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="/lib2/Public/HT/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/lib2/Public/HT/vendors/ckeditor/ckeditor.js"></script>
    <script src="/lib2/Public/HT/vendors/ckeditor/adapters/jquery.js"></script>
    <script src="/lib2/Public/HT/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    $(function() {
        // Bootstrap
        $('#bootstrap-editor').wysihtml5();

        // Ckeditor standard
        $('textarea#ckeditor_standard').ckeditor({
            width: '98%',
            height: '150px',
            toolbar: [{
                    name: 'document',
                    items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates']
                }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
                ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'], // Defines toolbar group without name.
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic']
                }
            ]
        });
        $('textarea#ckeditor_full').ckeditor({
            width: '98%',
            height: '150px'
        });
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_basic",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });

    // Tiny MCE
    tinymce.init({
        selector: "#tinymce_full",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        }, {
            title: 'Test template 2',
            content: 'Test 2'
        }]
    });
    </script>
    <script type="text/javascript">
    //上传插件

    $(function() {
        $('#file_upload').uploadify({
            'swf': '/lib2/Public/HT/uploadify/uploadify.swf',
            'uploader': '<?php echo U("PublicUse/Upload/upload");?>',
            'buttonText': '缩略图上传',
            'method': 'post',
            'onUploadSuccess': function(file, data, response) {
                alert(data);
                $('#img').attr({
                    src: '/lib2/Uploads/' + data,
                });
                $('#upload').attr({
                    value: data,
                });
            },
        });
        //图二

    });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        FormValidation.init();
    });
    var num = 1;
    var num2 = 1;
    $('#plus1').click(function(event) {
        $('#number').attr({
            value: num += 1,
        });;
    });
    $('#plus2').click(function(event) {
        if (num > 1) {
            $('#number').attr({
                value: num -= 1,
            });;
        }
    });
    $('.more').click(function(event) {
        num2++;
        var now = "<div class=\"control-group\"><div class=\"controls\"><div class=\"span8\"><div class=\"block\"><div class=\"navbar navbar-inner block-header\"><div class=\"muted pull-left\">作者" + num2 + "</div></div><div class=\"block-content collapse in\"><div class=\"span12\">姓名：<input name=\"creatorname" + num2 + "\" type=\"text\" id=\"creatorname" + num2 + "\" class=\"span2 m-wrap text-center\" value=\"\" /> 国籍<input name=\"creatorcountry" + num2 + "\" type=\"text\" class=\"span2 m-wrap text-center\" value=\"\" /> 出生：<input type=\"text\" class=\"span2 m-wrap text-center\" data-date-format=\"yyyy\" name='creatordate" + num2 + "' value=\"20" + num2 + "5\"><hr/> 身份：<input name=\"creatorrole" + num2 + "\" value=\"1\" type=\"radio\"  checked/> <span class=\"lbl\">作者</span><input name=\"creatorrole" + num2 + "\" value=\"2\" type=\"radio\" /> <span class=\"lbl\">译者</span><hr/></div></div></div></div></div></div><hr/>";
        $(".control-group:last").before(now);
    });
    </script>

</body>

</html>