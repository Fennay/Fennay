<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
		<title><?php echo web_title($title);?></title>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600&subset=latin,latin-ext' rel='stylesheet'> -->
        <link href="/Public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/Public/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href="/Public/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="/Public/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="/Public/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->

        <!-- 引入私有样式 -->
        <!-- select2插件 -->
<link rel="stylesheet" type="text/css" href="/Public/assets/global/plugins/select2/select2.css"/>


        <link rel="shortcut icon" href="/favicon.png"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo ">
        <!-- BEGIN HEADER -->
        <div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                    <img src="/Public/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <!-- 引入顶部 -->
                <div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-bell"></i>
            <span class="badge badge-default">
            7 </span>
            </a>
            <ul class="dropdown-menu">
                <li class="external">
                    <h3><span class="bold">12 pending</span> notifications</h3>
                    <a href="extra_profile.html">view all</a>
                </li>
                <li>
                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                        <li>
                            <a href="javascript:;">
                            <span class="time">just now</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-success">
                            <i class="fa fa-plus"></i>
                            </span>
                            New user registered. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">3 mins</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                            </span>
                            Server #12 overloaded. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">10 mins</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-warning">
                            <i class="fa fa-bell-o"></i>
                            </span>
                            Server #2 not responding. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">14 hrs</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-info">
                            <i class="fa fa-bullhorn"></i>
                            </span>
                            Application error. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">2 days</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                            </span>
                            Database overloaded 68%. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">3 days</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                            </span>
                            A user IP blocked. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">4 days</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-warning">
                            <i class="fa fa-bell-o"></i>
                            </span>
                            Storage Server #4 not responding dfdfdfd. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">5 days</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-info">
                            <i class="fa fa-bullhorn"></i>
                            </span>
                            System Error. </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="time">9 days</span>
                            <span class="details">
                            <span class="label label-sm label-icon label-danger">
                            <i class="fa fa-bolt"></i>
                            </span>
                            Storage server failed. </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- END NOTIFICATION DROPDOWN -->
        <!-- BEGIN INBOX DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-envelope-open"></i>
            <span class="badge badge-default">
            4 </span>
            </a>
            <ul class="dropdown-menu">
                <li class="external">
                    <h3>You have <span class="bold">7 New</span> Messages</h3>
                    <a href="page_inbox.html">view all</a>
                </li>
                <li>
                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo">
                            <img src="/Public/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                            <span class="from">
                            Lisa Wong </span>
                            <span class="time">Just Now </span>
                            </span>
                            <span class="message">
                            Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo">
                            <img src="/Public/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                            <span class="from">
                            Richard Doe </span>
                            <span class="time">16 mins </span>
                            </span>
                            <span class="message">
                            Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo">
                            <img src="/Public/assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                            <span class="from">
                            Bob Nilson </span>
                            <span class="time">2 hrs </span>
                            </span>
                            <span class="message">
                            Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo">
                            <img src="/Public/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                            <span class="from">
                            Lisa Wong </span>
                            <span class="time">40 mins </span>
                            </span>
                            <span class="message">
                            Vivamus sed auctor 40% nibh congue nibh... </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo">
                            <img src="/Public/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                            <span class="from">
                            Richard Doe </span>
                            <span class="time">46 mins </span>
                            </span>
                            <span class="message">
                            Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- END INBOX DROPDOWN -->
        <!-- BEGIN TODO DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="icon-calendar"></i>
            <span class="badge badge-default">
            3 </span>
            </a>
            <ul class="dropdown-menu extended tasks">
                <li class="external">
                    <h3>You have <span class="bold">12 pending</span> tasks</h3>
                    <a href="page_todo.html">view all</a>
                </li>
                <li>
                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">New release v1.2 </span>
                            <span class="percent">30%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">Application deployment</span>
                            <span class="percent">65%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">Mobile app release</span>
                            <span class="percent">98%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">Database migration</span>
                            <span class="percent">10%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">Web server upgrade</span>
                            <span class="percent">58%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">Mobile development</span>
                            <span class="percent">85%</span>
                            </span>
                            <span class="progress">
                            <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                            <span class="task">
                            <span class="desc">New UI release</span>
                            <span class="percent">38%</span>
                            </span>
                            <span class="progress progress-striped">
                            <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                            </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- END TODO DROPDOWN -->
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" class="img-circle" src="/Public/assets/admin/layout/img/avatar3_small.jpg"/>
            <span class="username username-hide-on-mobile">
            Nick </span>
            <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="extra_profile.html">
                    <i class="icon-user"></i> My Profile </a>
                </li>
                <li>
                    <a href="page_calendar.html">
                    <i class="icon-calendar"></i> My Calendar </a>
                </li>
                <li>
                    <a href="inbox.html">
                    <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                    3 </span>
                    </a>
                </li>
                <li>
                    <a href="page_todo.html">
                    <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                    7 </span>
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="extra_lock.html">
                    <i class="icon-lock"></i> Lock Screen </a>
                </li>
                <li>
                    <a href="login.html">
                    <i class="icon-key"></i> Log Out </a>
                </li>
            </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-quick-sidebar-toggler">
            <a href="javascript:;" class="dropdown-toggle">
            <i class="icon-logout"></i>
            </a>
        </li>
        <!-- END QUICK SIDEBAR TOGGLER -->
    </ul>
</div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <!-- 引入侧边栏 -->
                    <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
    </li>
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="sidebar-search-wrapper">
        <form class="sidebar-search " action="extra_search.html" method="POST">
            <a href="javascript:;" class="remove">
            <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                </span>
            </div>
        </form>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="start active"<?php endif; ?>>
        <a href="javascript:;">
        <i class="icon-home"></i>
        <span class="title">首页</span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
        <i class="icon-settings"></i>
        <span class="title">网站设置</span>
        </a>
    </li>
    <li <?php if(CONTROLLER_NAME == 'Article'): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('/Padmin/Article/index');?>">
        <i class="icon-pencil"></i>
        <span class="title">文章管理</span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
        <i class="icon-note"></i>
        <span class="title">留言管理</span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
        <i class="icon-note"></i>
        <span class="title">留言管理</span>
        </a>
    </li>
    <li>
        <a href="javascript:;">
        <i class="icon-logout"></i>
        <span class="title">退出登陆</span>
        </a>
    </li>
</ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                   <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    Widget settings form goes here
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn blue">Save changes</button>
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                   </div>
                   <!-- 内容替换区域 -->
            	   <h3 class="page-title">
文章管理 <small>input spinner, switches, input masks and more</small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">首页</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">文章</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">文章列表</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#"><?php if($vo['id'] != ''): ?>编辑<?php else: ?>添加<?php endif; ?>文章</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12 ">
        <form action="<?php echo U('/Padmin/Article/save');?>" id="basic_form" method="post">
            <!-- SEO 优化信息-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption ">
                        <i class="icon-pin"></i>
                        <span class="caption-subject bold uppercase"> SEO优化</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">SEO标题</label>
                            <div class="col-md-4">
                                <input type="text" name="seo[seo_title]" value="<?php echo ($vo['seo_title']); ?>" class="form-control input-circle" placeholder="请输入SEO标题...">
                                <span class="help-block">请输入SEO标题... </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">SEO关键字</label>
                            <div class="col-md-4">
                                <input type="text" name="seo[seo_keyword]" value="<?php echo ($vo['seo_keyword']); ?>" class="form-control input-circle" placeholder="请输入SEO关键字...">
                                <span class="help-block">请输入SEO关键字... </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">SEO描述</label>
                            <div class="col-md-4">
                                <textarea class="form-control" name="seo[seo_desc]" value="<?php echo ($vo['seo_desc']); ?>" cols="5" rows="5"></textarea>
                                <span class="help-block">请输入SEO描述... </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle blue">保存</button>
                                <button type="button" class="btn btn-circle default">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 文章基本信息 -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-pin font-green"></i>
                        <span class="caption-subject bold uppercase"> 添加文章</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">标题</label>
                            <div class="col-md-4">
                                <input type="text" name="article[title]" value="<?php echo ($vo['title']); ?>" class="form-control input-circle" placeholder="请输入标题...">
                                <span class="help-block">
                                请输入标题... </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">分类</label>
                            <div class="col-md-4">
                                <select name="article[cate][]"  class="form-control select2 select2-offscreen" data-placeholder="请选择分类..." multiple>
                                    <option value=""></option>
                                    <option value="1" <?php if(in_array(($vo['cates']), explode(',',"1"))): ?>selected<?php endif; ?>>Linux</option>
                                    <option value="2" <?php if(in_array(($vo['cates']), explode(',',"2"))): ?>selected<?php endif; ?>>PHP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">标签</label>
                            <div class="col-md-4">
                                <select name="article[tag][]" class="form-control select2 select2-offscreen" data-placeholder="请选择标签..." multiple>
                                    <option value=""></option>
                                    <option value="1" <?php if(in_array(($vo['tags']), explode(',',"1"))): ?>selected<?php endif; ?>>Linux</option>
                                    <option value="2" <?php if(in_array(($vo['tags']), explode(',',"2"))): ?>selected<?php endif; ?>>PHP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">摘要</label>
                            <div class="col-md-4">
                                <textarea name="article[abstract]" value="<?php echo ($vo['abstract']); ?>" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">作者</label>
                            <div class="col-md-4">
                                <div class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="article[author]" value="<?php echo ($vo['author']); ?>" class="form-control input-circle-left" placeholder="作者">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">阅读数量</label>
                            <div class="col-md-4">
                                <div class="input-icon">
                                    <i class="fa fa-bell-o"></i>
                                    <input type="text" name="article[click_num]" value="<?php echo ($vo['click_num']); ?>" value="0" class="form-control input-circle" placeholder="Left icon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">排序</label>
                            <div class="col-md-4">
                                <div class="input-icon">
                                    <i class="fa fa-bell-o"></i>
                                    <input type="text" name="article[sort]" value="0" value="<?php echo ($vo['sort']); ?>" class="form-control input-circle" placeholder="Left icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle blue">保存</button>
                                <button type="button" class="btn btn-circle default">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 文章内容信息 -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green">
                        <i class="icon-pin font-green"></i>
                        <span class="caption-subject bold uppercase"> 文章内容</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body form-horizontal">
                        <div class="form-group ">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-4">
                                <script type="text/plain" id="editor" name="content" style="width:1000px;height:460px;"><?php echo (html_entity_decode($vo['content'])); ?></script>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle blue">保存</button>
                                <button type="button" class="btn btn-circle default">取消</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- 提示信息弹出层 -->
<div aria-hidden="true" role="dialog" tabindex="-1" id="msg-info" class="modal fade modal-scroll">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn default" type="button">关闭</button>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                2014 &copy; Metronic by keenthemes.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="/Public/assets/global/plugins/respond.min.js"></script>
        <script src="/Public/assets/global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <script src="/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/Public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/Public/assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            // jQuery(document).ready(function() {
            //     Metronic.init(); // init metronic core componets
            //     Layout.init(); // init layout
            //     QuickSidebar.init(); // init quick sidebar
            //     Demo.init(); // init demo features
            //     Index.init();
            //     Index.initDashboardDaterange();
            //     Index.initJQVMAP(); // init index page's custom scripts
            //     Index.initCalendar(); // init index page's custom scripts
            //     Index.initCharts(); // init index page's custom scripts
            //     Index.initChat();
            //     Index.initMiniCharts();
            //     Tasks.initDashboardWidget();
            // });
        </script>

        <!-- 引入当前页面的就是文件 -->
        <!-- 百度编辑器 -->
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<!-- <script type="text/javascript" charset="utf-8" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script> -->
<!-- select2插件 -->
<script type="text/javascript" src="/Public/assets/global/plugins/select2/select2.min.js"></script>
<script>
    $(document).ready(function(){
        // 文章相关js
        //暂无相关记录
        var $tr = $('.article-list');
        if($tr.find('tr').length == 0){
            $tr.html('<tr><td style="color:red">暂无相关记录</td></tr>');
        }

        //列表页删除文章
        $('.article-delete').click(function (){
            var $this = $(this);
            var aid = $this.attr('data-aid');
            $('#msg-confirm').modal('show');
            $('#msg-confirm .modal-title').html('确定操作');
            $('#msg-confirm .modal-body').html('确定删除吗?');
            //点击确认后
            $('#confirm-del').on('click',function(){
                var url = "<?php echo U('/Padmin/Article/delete');?>";
                $.ajax({
                    url:url,
                    type:"POST",
                    data:{aid:aid},
                    dataType:'JSON',
                    success:function(msg){
                        //弹出提示弹出层
                        $('#msg-info').modal('show');
                        if(msg.status == 1){
                            $('#msg-info .modal-title').html('成功提示');
                            //删除成功，隐藏该行记录
                            $this.closest('tr').remove();
                        }else{
                            $('#msg-info .modal-title').html('失败提示');
                        }
                        $('#confirm-del').remove();
                        $('#msg-info .modal-body').html(msg.msg);
                        $('.pro_id').val(msg.pro_id);
                    }
                });
            });


        });
    });

    $('.select2').select2();
	//实例化编辑器
    if(window.editor){
        var ue = UE.getEditor('editor');
    }

    var form = $('#basic_form');
    var url = form.attr('action');
    //  保存基本信息
    $('#basic').click(function (){
        var data = form.serializeArray();
        $.ajax({
            url:url,
            type:"POST",
            data:data,
            dataType:'JSON',
            success:function(msg){
                //弹出提示弹出层
                $('#msg-info').modal('show');
                if(msg.status == 1){
                    $('#msg-info .modal-title').html('成功提示');
                }else{
                    $('#msg-info .modal-title').html('失败提示');
                }
                $('#msg-info .modal-body').html(msg.msg);
                $('.pro_id').val(msg.pro_id);
            }
        });
    });
</script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>