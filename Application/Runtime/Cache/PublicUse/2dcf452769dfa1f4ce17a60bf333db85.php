<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>登录 - 后台</title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="/lib2/Public/Login/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/lib2/Public/Login/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
          <link rel="stylesheet" href="/lib2/Public/Login/assets/css/font-awesome-ie7.min.css" />
        <![endif]-->
    <!-- page specific plugin styles -->
    <!-- fonts -->
    <link rel="stylesheet" href="/lib2/Public/Login/assets/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/lib2/Public/Login/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/lib2/Public/Login/assets/css/ace-rtl.min.css" />
    <!--[if lte IE 8]>
          <link rel="stylesheet" href="/lib2/Public/Login/assets/css/ace-ie.min.css" />
        <![endif]-->
    <!-- inline styles related to this page -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="/lib2/Public/Login/assets/js/html5shiv.js"></script>
        <script src="/lib2/Public/Login/assets/js/respond.min.js"></script>
        <![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                    <i class="icon-leaf green"></i>
                                    <span class="red">DbCourse</span>
                                    <span class="white">Application</span>
                                </h1>
                            <h4 class="blue">&copy; 闫张增小组</h4>
                        </div>
                        <div class="space-6"></div>
                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header blue lighter bigger">
                                                <i class="icon-coffee green"></i>
                                                请登录
                                            </h4>
                                        <div class="space-6"></div>
                                        <form action="<?php echo U('PublicUse/Login/checklogin');?>" method="post" class="form-horizontal">
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="ID" placeholder="输入你的ID" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                </label>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control " name="password"placeholder="输入你的密码" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                </label>
                                                <div class="form-inline">
                                                    <input type="text" class="form-control width-50" name="verify" placeholder="请输入验证码" />
                                                    <img src=""  class="width-45 " id="verify"/>
                                                </div>
                                                <div class="space"></div>
                                                <div class="clearfix">
                                                    <input type="submit" class="width-100  btn btn-sm btn-primary" value="Login" />
                                                </div>
                                                <div class="space-4"></div>
                                            </fieldset>
                                        </form>
                                        <div class="social-or-login center">
                                            <span class="bigger-110">使用其他的方式登陆</span>
                                        </div>
                                        <div class="social-login center">
                                            <a class="btn btn-primary">
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a class="btn btn-info">
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a class="btn btn-danger">
                                                <i class="icon-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /widget-main -->
                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                                                <i class="icon-arrow-left"></i> 忘记密码
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                                    想要注册
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /widget-body -->
                            </div>
                            <!-- /login-box -->
                            <div id="forgot-box" class="forgot-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger">
                                                <i class="icon-key"></i>
                                                Retrieve Password
                                            </h4>
                                        <div class="space-6"></div>
                                        <p>
                                            Enter your email and to receive instructions
                                        </p>
                                        <form>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                </label>
                                                <div class="clearfix">
                                                    <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                        <i class="icon-lightbulb"></i> Send Me!
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <!-- /widget-main -->
                                    <div class="toolbar center">
                                        <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                                Back to login
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                    </div>
                                </div>
                                <!-- /widget-body -->
                            </div>
                            <!-- /forgot-box -->
                            <div id="signup-box" class="signup-box widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                                <i class="icon-group blue"></i>
                                                我要注册
                                            </h4>
                                        <div class="space-6"></div>
                                        <h5>请联系管理员</h5>
                                        <p>管理员邮箱:</p>
                                        <blockquote><strong></strong>h12345jack@163.com</blockquote>
                                    </div>
                                    <div class="toolbar center">
                                        <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                            <i class="icon-arrow-left"></i> Back to login
                                        </a>
                                    </div>
                                </div>
                                <!-- /widget-body -->
                            </div>
                            <!-- /signup-box -->
                        </div>
                        <!-- /position-relative -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.main-container -->
    <!-- basic scripts -->
    <!--[if !IE]> -->
    <script type="text/javascript">
    window.jQuery || document.write("<script src='/lib2/Public/Login/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>
    <!-- <![endif]-->
    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/lib2/Public/Login/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
    <script type="text/javascript">
    if ("ontouchend" in document) document.write("<script src='/lib2/Public/Login/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script language="JavaScript">
    $(document).ready(function($) {
        var newUrl1='<?php echo U('PublicUse/Login/verify');?>'+'?F='+Math.random();
        $('#verify').attr({
            src: newUrl1
        });
    });
    $(function() {
        $("#verify").click(function() {
            var newUrl = $(this).attr("src")+'?F='+Math.random();
            $(this).attr("src", newUrl);
           // alert("hrere");
        });
    });
    </script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
    function show_box(id) {
        jQuery('.widget-box.visible').removeClass('visible');
        jQuery('#' + id).addClass('visible');
    }
    </script>
</body>

</html>