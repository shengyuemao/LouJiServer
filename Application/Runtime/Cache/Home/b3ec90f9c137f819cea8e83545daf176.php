<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/first/Public/Css/login.css"/>
<script type="text/javascript" src= "/first/Public/Js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="/first/Public/Js/login.js"></script>
<title>index</title>
</head>
<body>
<div class = "login">

<form method="get" action="<?php echo U('User/login');?>">
<ul>
<li>昵称:<input type="text" name="username"/></li>
<li>密码:<input type="password" name="password"/></li>
<li><input type="submit" value="登录"></li>
</ul>

</form>

</div>


</body>
</html>