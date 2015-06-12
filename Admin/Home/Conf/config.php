<?php
return array (
		"web_global_title" => "ozgweb",
		"page_size" => 16,
		
		// 后台菜单，只支持3级
		"admin_menu_list" => [ 
				array (
						"id" => 1,
						"name" => "我的后台管理",
						"selected" => true,
						"child_menu" => array (
								array (
										"id" => 2,
										"name" => "管理员管理",
										"child_menu" => array (
												array (
														"id" => 4,
														"name" => "修改密码",
														"url" => "admin_pwd.html" 
												),
												array (
														"id" => 5,
														"name" => "管理员列表",
														"url" => "admin_list.html" 
												) 
										) 
								),
								array (
										"id" => 3,
										"name" => "商品管理",
										"child_menu" => array (
												array (
														"id" => 6,
														"name" => "商品种类",
														"url" => "goods_type_list.html" 
												),
												array (
														"id" => 7,
														"name" => "商品列表",
														"url" => "goods_list.html" 
												) 
										) 
								) 
								,
								array(
										"id" => 4,
										"name" => "活动管理",
										"child_menu" => array(
												array(
														"id" => 9,
														"name"=>"活动列表",
														"url"=>"action_list.html"
												),
												array(
														"id"=>10,
														"name"=>"推荐列表",
														"url"=>"recommend_list.html"
												),
												array(
														"id"=>11,
														"name"=>"广告列表",
														"url"=>"ad_list.html"
												)
												
										)
										
								)
								
						) 
				) 
		],
		// '配置项'=>'配置值'
		'DB_TYPE' => 'mysql',
		'DB_USER' => 'root',
		'DB_PWD' => '',
		'DB_NAME' => 'app_maomo',
		'DB_PORT' => '3306',
		'DB_PREFIX' => 'think_',
		'DB_CHARSET' => 'utf8', // 字符集
		'DB_DEBUG' => TRUE 
); // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
