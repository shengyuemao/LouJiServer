<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="Stylesheet" type="text/css"
	href="/first/Public/jqueryMobile/jquery.mobile-1.4.5.css" />
<link rel='stylesheet' id='camera-css'
	href='/first/Public/camera/camera.css' type='text/css' media='all'>

<script type="text/javascript" src="/first/Public/camera/jquery.min.js"></script>
<script type="text/javascript"
	src="/first/Public/jqueryMobile/jquery.mobile-1.4.5.js"></script>

<script type='text/javascript'
	src='/first/Public/camera/jquery.easing.1.3.js'></script>
<script type="text/javascript" src="/first/Public/camera/camera.min.js"></script>

<title>index</title>
<style type="text/css">
#header1 {
	background: #40aac5;
}

#position {
	width: 20%;
	padding-left: 5%;
}

#posicon {
	width: 10%;
}

#search {
	width: 70%;
}

p {
	text-align: center;
}

.action div {
	float: left;
	text-align: center;
}

.action {
	text-align: center;
}

#jiantou {
	transform: rotate(90deg);
	-ms-transform: rotate(90deg); /* IE 9 */
	-webkit-transform: rotate(90deg); /* Safari and Chrome */
	-o-transform: rotate(90deg); /* Opera */
	-moz-transform: rotate(90deg); /* Firefox */
}
</style>

<script>
	jQuery(function() {
		jQuery('#camera_wrap_2').camera({
			height : '300px',
			loader : 'bar',
			pagination : true,
			thumbnails : true
		});
	});
</script>

</head>
<body>

	<div id="page1" data-role="page">

		<div data-role="header" data-position="fixed" id="header1">

			<div data-role="navbar" data-iconpos="right">
				<ul id="headerul">
					<li id="position"><h5 style="color: #ffffff">深圳</h5> <img
						src=""></li>
					<li id="search"><input type="search" name="search"
						data-theme="a" /></li>
					<li id="posicon"></li>
				</ul>
			</div>

		</div>

		<div data-role="content" class="content">

			<ul data-role="listview">
				<li>
					<div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
						<div data-thumb="/first/Public/images/slides/thumbs/bridge.jpg"
							data-src="/first/Public/images/slides/bridge.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div> -->
						</div>
						<div data-thumb="/first/Public/images/slides/thumbs/leaf.jpg"
							data-src="/first/Public/images/slides/leaf.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div> -->
						</div>
						<div data-thumb="/first/Public/images/slides/thumbs/road.jpg"
							data-src="/first/Public/images/slides/road.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div> -->
						</div>
						<div data-thumb="/first/Public/images/slides/thumbs/sea.jpg"
							data-src="/first/Public/images/slides/sea.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div> -->
						</div>
						<div data-thumb="/first/Public/images/slides/thumbs/shelter.jpg"
							data-src="/first/Public/images/slides/shelter.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div> -->
						</div>
						<div data-thumb="/first/Public/images/slides/thumbs/tree.jpg"
							data-src="/first/Public/images/slides/tree.jpg">
							<!-- <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div> -->
						</div>
					</div> <!-- #camera_wrap_2 -->
				</li>

				<li>
					<div class="ui-grid-c">
						<div class="ui-block-a">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-b">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-c">

							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-d">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-a">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-b">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-c">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
						<div class="ui-block-d">
							<p>
								<img alt="" src="/first/Public/img/groupitem1.png">
							</p>
							<p>美食</p>
						</div>
					</div>
				</li>

				<li>会员活动</li>
				<li>
					<div class="ui-grid-a" style="text-align: center;">
						<div class="ui-block-a">
							<img alt="" src="/first/Public/img/actionitem1.png">
						</div>
						<div class="ui-block-b">
							<img alt="" src="/first/Public/img/actionitem1.png">
						</div>
						<div class="ui-block-a">
							<img alt="" src="/first/Public/img/actionitem1.png">
						</div>
						<div class="ui-block-b">
							<img alt="" src="/first/Public/img/actionitem1.png">
						</div>
					</div>
				</li>

				<li>活动列表</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>

					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>

				<!-- 活动列表项 -->
				<li class="action">
					<div>
						<img alt="" src="/first/Public/img/action.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>吃喝玩乐超低价</span>
						</p>
						<p>
							<span>新用户首购专享</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div>
				</li>
			</ul>

		</div>

		<div data-role="footer" data-position="fixed"
			style="background: #333333; color: #ffffff">
			<div class="ui-grid-c" style="text-align: center;">
				<div class="ui-block-a">
					<img alt="" src="/first/Public/img/indexicon.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">首页</p>
				</div>
				<div class="ui-block-b">
					<a href="#bookpic"><img alt=""
						src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;"></a>
					<p style="margin-top: -2%;">商家</p>
				</div>
				<div class="ui-block-c">
					<img alt="" src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">推荐</p>
				</div>
				<div class="ui-block-d" style="text-align: center;">
					<img alt="" src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">我的</p>
				</div>
			</div>
		</div>
	</div>


	<div data-role="page" id="bookpic"
		data-add-back-btn="true">
		<div data-role="header" style="background: #40aac5; color: #ffffff" data-position="fixed">
			<h1>商家</h1>
			<div data-role="navbar">
				<ul>
					<li><a href="#anylink">全部分类<img id="jiantou"
							src="/first/Public/img/icon_jiantou_small.png"
							style="float: right; width: 24px; height: 24px;"></a></li>
					<li><a href="#anylink">全城<img id="jiantou"
							src="/first/Public/img/icon_jiantou_small.png"
							style="float: right; width: 24px; height: 24px;"></a></li>
					<li><a href="#anylink">智能排序<img id="jiantou"
							src="/first/Public/img/icon_jiantou_small.png"
							style="float: right; width: 24px; height: 24px;"></a></li>
				</ul>

			</div>
		</div>

		<div data-role="content">


			<ul data-role="listview" class="action">

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px;margin-left: 10%"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

				<li><div style="margin-top: 2%; margin-right: 2%">
						<img alt="" src="/first/Public/img/busniessitem.png">
					</div>

					<div style="padding-top: 2%">
						<p>
							<span>商家名称</span>
						</p>
						<p>
							<span>内容简介</span>
						</p>
						<p>
							<img alt="" src="/first/Public/img/star.jpg"
								style="width: 50px; height: 10px"><span>20000人评价</span>
						</p>
						<p style="margin-top: 60%">
							<span>华强路</span>
						</p>
					</div>

					<div style="float: right; padding-top: 4%; color: #ee7400">
						<p>
							<span style="font-size: 24px">1</span>元起
						</p>
					</div></li>

			</ul>
		</div>
		<div data-role="footer" data-position="fixed"
			style="background: #333333; color: #ffffff">
			<div class="ui-grid-c" style="text-align: center;">
				<div class="ui-block-a">
					<img alt="" src="/first/Public/img/indexicon.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">首页</p>
				</div>
				<div class="ui-block-b">
					<a href="#bookpic"><img alt=""
						src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;"></a>
					<p style="margin-top: -2%;">商家</p>
				</div>
				<div class="ui-block-c">
					<img alt="" src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">推荐</p>
				</div>
				<div class="ui-block-d" style="text-align: center;">
					<img alt="" src="/first/Public/img/indexicon_check.png"
						style="width: 40px; height: 40px;">
					<p style="margin-top: -2%;">我的</p>
				</div>
			</div>
		</div>
	</div>


	<div data-role="page" id="tuijian">
		<div data-role="header" data-postion="fixed"></div>

		<div data-role="content"></div>

		<div data-role="footer"></div>

	</div>



</body>
</html>