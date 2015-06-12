<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo (C("web_global_title")); ?> - 后台登陆</title>
        <link rel="stylesheet" href="/first/Public/simple/css/a_login_reset.css" />
        <link rel="stylesheet" href="/first/Public/simple/css/a_login_supersized.css" />
        <link rel="stylesheet" href="/first/Public/simple/css/a_login_style.css" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->		
		<script src="<?php echo (C("jquery")); ?>"></script>
		<script src="/first/Public/simple/js/jquery/supersized.3.2.7.min.js" ></script>
        <script src="/first/Public/simple/js/jquery/supersized-init.js" ></script>
        <script src="/first/Public/simple/js/jquery/scripts.js" ></script>
		<script src="/first/Public/simple/js/md5.js" ></script>
		<script src="/first/Public/simple/js/a_index.js" ></script>
    </head>
    <body>
        <div class="page-container">
            <h1>后台管理登陆</h1>
            <form action="<?php echo U(Admin/ajax_login);?>" method="post" id="main_form">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！" />
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！" />
                <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！" />
				<a href="#" id="get_code_img"><img src="get_code" class="getcode" /></a>
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
    </body>
</html>