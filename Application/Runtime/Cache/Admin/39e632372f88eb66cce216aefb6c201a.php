<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0090)http://flashcanvas.net/examples/thejit.org/static/v20/Jit/Examples/Hypertree/example2.html -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>可视化图书与用户</title>
    <!-- CSS Files -->
    <link type="text/css" href="/lib2/Public/HT/123123_files/base.css" rel="stylesheet">
    <link type="text/css" href="/lib2/Public/HT/123123_files/Hypertree.css" rel="stylesheet">
    <!--[if lt IE 9]>
<script language="javascript" type="text/javascript" src="../../../../../../../bin/flashcanvas.js"></script>
<script language="javascript" type="text/javascript" src="../../../../../../../bin/flashcanvas.disableContextMenu.js"></script>
<![endif]-->
    <!-- JIT Library File -->
    <script language="javascript" type="text/javascript" src="/lib2/Public/HT/123123_files/jit.js"></script>
    <style type="text/css">
    .js{
        margin-left: 20px;
        text-align: left;
    }
    .js3{
        text-align: center;
    }
    .js2{
        margin-top: 20px; 
        margin-right: 20px;  
        text-align: right;
    }
    </style>
    <!-- Example File -->
    
    
</head>

<body onload="init();">
<div id="container">

<div id="left-container">



        
        <h4 style="text-align:center;"><?php echo ($name); ?>的用户图   </h4> 
        <div class="js">
        <form action="<?php echo U('Admin/Book/bookandpeople');?>">
          <input type="text" name="id" />
          <div class="js2"><input type="submit" value="生成图"/></div>
        </form>   
        </div>
      
        <div class="js3"><a href="<?php echo U('Admin/Book/index');?>">【返回】</a></div>
          <hr/>
            <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t1): $mod = ($i % 2 );++$i;?><div class="js">与【<?php echo ($t1["book2name"]); ?>】的余弦值为<?php echo ($t1["value"]); ?></div>
            <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

        

</div>

<div id="center-container">
    <div id="infovis"></div>    
</div>

<div id="right-container">

<div id="inner-details"></div>

</div>

<div id="log"></div>
</div>
<script type="text/javascript">
    var json = <?php echo ($data); ?>;
</script>
<script language="javascript" type="text/javascript" src="/lib2/Public/HT/123123_files/example2.js"></script>
</body>
</html>