<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo (C("web_global_title")); ?> - 后台管理</title>
	<meta charset="utf-8" />
	<style media="all" type="text/css">@import "/first/Public/simple/css/a_all.css";</style>
	<style media="all" type="text/css">@import "/first/Public/simple/css/jquery/pagination.css";</style>
	<script src="<?php echo (C("jquery")); ?>"></script>
	<script src="/first/Public/simple/js/md5.js"></script>
	<script src="/first/Public/simple/js/a_admin.js"></script>
	<script src=/first/Public/simple/js/jquery/jquery.pagination.js"></script>
</head>
<body>
<div id="main">
	<div id="header">
		<!--上面的菜单-->
		<ul id="top-navigation">
		</ul>
	</div>
	<div id="middle">
		<!--参数-->
		
		<input type="hidden" id="menu_param" />
		<!--左边菜单-->
		<div id="left-column">			
		</div>
		<div id="center-column">
			<!--内容部分-->
		</div>
		<div id="right-column">
			<strong class="h">当前用户</strong>
			<div class="box">
				<div>用户名:<?php echo ($_SESSION['sess_admin']['username']); ?></div>
				<div><a href="#" id="logout"><b>退出登录</b></a></div>
			</div>
	    </div>
		<div id="right-column">
			<strong class="h">系统信息</strong>
			<div class="box">
				<div>System:<?php echo ($sys); ?></div>
				<div>PHP:<?php echo ($php_ver); ?></div>
				<div>ThinkPHP:<?php echo ($thinkphp_ver); ?></div>
				<div><a href="https://github.com/ouzhigang/thinkphp-ozgweb" target="_blank"><b>GitHub</b></a></div>
			</div>
	    </div>
	</div>
	<div id="footer"></div>
</div>

</body>
</html>