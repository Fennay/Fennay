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
        <!-- 引入title -->
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
        
        <link rel="shortcut icon" href="/favicon.png"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-md login">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="menu-toggler sidebar-toggler">
        </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/">
            <!-- <img src="/Public/assets/admin/layout/img/logo-big.png" alt=""/> -->
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="#" method="post">
                <h3 class="form-title">开启地狱之门</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> 请输入用户名和密码 </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">用户名</label>
                    <input class="form-control form-control-solid placeholder-no-fix" id="username" type="text" autocomplete="off" placeholder="用户名" name="username"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">密码</label>
                    <input class="form-control form-control-solid placeholder-no-fix" id="password" type="password" autocomplete="off" placeholder="密码" name="password"/>
                </div>
                <div class="form-actions">
                    <button class="btn btn-success uppercase">登陆</button>
                    <label class="rememberme check">
                    <input type="checkbox" name="remember" value="1"/>记住我 </label>
                    <a href="javascript:;" id="forget-password" class="forget-password">忘记密码?</a>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3>Forget Password ?</h3>
                <p>
                Enter your e-mail address below to reset your password.
                </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn btn-default">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
        </div>

		<!-- 提示信息弹出层 -->
		<div aria-hidden="true" role="dialog" tabindex="-1" id="msg-info" class="modal fade modal-scroll">
		    <div class="modal-dialog modal-sm">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
		                <h4 class="modal-title">提示信息</h4>
		            </div>
		            <div class="modal-body">

		            </div>
		            <div class="modal-footer">
		                <button data-dismiss="modal" id="colse" class="btn default" type="button">关闭</button>
		            </div>
		        </div>
		    </div>
		</div>

        <div class="copyright">
            2014 © Fennay. Admin Dashboard Template.
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="/Public/assets/global/plugins/respond.min.js"></script>
        <script src="/Public/assets/global/plugins/excanvas.min.js"></script>
        <![endif]-->
        <script src="/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="/Public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/Public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/Public/assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="/Public/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                // Metronic.init(); // init metronic core components
                // Layout.init(); // init current layout
                // Login.init();
                // Demo.init();
            });
        </script>

        <!-- 引入当前页面的就是文件 -->
        <script>
	$('.login-form').on('submit',submit)

	function submit(){
		var url = "<?php echo U('/Padmin/Login/login_handle');?>";
		var username = $('[name=username]').val();
		var password = $('[name=password]').val();

		//判断帐号密码是否为空
		if(username == '' || password == ''){
			$('.alert').show();
			return false;
		}

		//登陆提交数据
		$.ajax({
			url:url,
			type:'POST',
			data:{username:username,password:password},
			dataType:'json',
			success:function(data){
				if(data.status < 0){
					$('.alert').show();
					$('.alert span').html(data.msg);
					return;
				}else{
					$('#msg-info').modal('show');
					$('#msg-info .modal-title').html('成功提示');
					$('#msg-info .modal-body').html(data.msg);
					$('#colse').on('click',function(){
						window.location.href="<?php echo U('/Padmin/Index/index');?>";
					});
				}
			}
		});
		return false;
	}

</script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>