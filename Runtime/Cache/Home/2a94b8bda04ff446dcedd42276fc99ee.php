<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>{blog}</title>

    <!-- Bootstrap -->
    <link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Home/css/core.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- //引入导航 -->
    <div class="navbar  navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Blog</a>
    </div>
	<nav class="collapse navbar-collapse  " id="bs-example-navbar-collapse-1">
		<div class=" ">
	      	<ul class="nav navbar-nav">
	            <li ><a href="">首页</a></li>
	            <li ><a href="">人生</a></li>
	            <li ><a href="">百味</a></li>
	            <li ><a href="">关于</a></li>
	        </ul>
		</div>
	</nav>
</div>

    <div class="container main">
        <!-- //引入侧边栏 -->
        <div class="col-md-3">
    <object width="260" height="90" align="middle" class="col-md-12">
        <param name="allowScriptAccess" value="always" />
        <param name="movie" value="/Public/Home/flash/honehone_clock_wh.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="#ffffff" />
        <param name="wmode" value="transparent" />
        <embed wmode="transparent" src="/Public/Home/flash/honehone_clock_wh.swf" quality="high"  allowScriptAccess="always" type="application/x-shockwave-flash" />
    </object>
    <fieldset style="margin-top:20px;" class="col-md-12">
        <legend >关于我</legend>
        <p>邮箱：feng@fennay.com</p>
        <p>微博：feng@fennay.com</p>
        <p>Q　Q：feng@fennay.com</p>
    </fieldset>
    <fieldset class="tagCloud" style="margin-top:20px;" id="tagCloud" class="col-md-12">
        <legend >标签云</legend>
        <a href="http://www.alixixi.com">JS课程</a>
        <a href="http://www.alixixi.com" class="red">教程</a>
        <a href="http://www.alixixi.com">试听</a>
        <a href="http://www.alixixi.com">精品</a>
        <a href="http://www.alixixi.com" class="blue">妙味课堂</a>
        <a href="http://alixixi.com">SEO</a>
        <a href="http://alixixi.com" class="red">特效</a>
        <a href="http://alixixi.com" class="yellow">JavaScript</a>
        <a href="http://alixixi.com">miaov</a>
        <a href="http://alixixi.com" class="red">CSS</a>
        <a href="http://alixixi.com">求职</a>
        <a href="http://www.alixixi.com" class="blue">面试题</a>
        <a href="http://www.alixixi.com">继承</a>
        <a href="http://www.alixixi.com/" class="red">妙味课堂</a>
        <a href="http://www.alixixi.com" class="blue">OOP</a>
        <a href="http://www.alixixi.com">XHTML</a>
        <a href="http://www.alixixi.com" class="blue">setInterval</a>
        <a href="http://alixixi.com">W3C</a>
        <a href="http://alixixi.com">石川</a>
        <a href="http://alixixi.com" class="yellow">妙味课堂</a>
        <a href="http://alixixi.com">blue</a>
    </fieldset>
</div>
        <!-- //页面内容 -->
        <div class="content col-md-9">
    <div class="row col-md-12">
        <h1><a href="###">06月10日 - jQuery选择器之内容过滤选择器</a></h1>
        <ul>
            <span class="label label-default fny_tag ">分类：jQuery、js</span>
            <span class="label label-default fny_tag">作者：Fennay</span>
            <span class="label label-default fny_tag">发布时间：2015-06-23</span>
            <span class="label label-default fny_tag">点击数:100</span>
        </ul>
        <blockquote style="margin-top:28px;">
            <p>相信大家已经注意到了，程序员的大部分时间都花在电脑桌前编程，这会损害程序员的健康。其实不需要多么复杂的养生，你只需每天做一些小小的改变，就可以摆脱病痛、保持健康。
            相信大家已经注意到了，程序员的大部分时间都花在电脑桌前编程，这会损害程序员的健康。其实不需要多么复杂的养生，你只需每天做一些小小的改变，就可以摆脱病痛、保持健康。</p>
        </blockquote>
        <span class="pull-right"><a href="###">查看详情</a></span>
    </div>
</div>
    </div>

    <div class="text-center">
        Copyright &copy; & Designed by Fennay
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Public/Home/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/Home/js/bootstrap.min.js"></script>
    <!-- //标签云 -->
    <script type="text/javascript" src="/Public/Home/js/tag_cloud.js"></script>
</body>
</html>