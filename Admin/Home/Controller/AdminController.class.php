<?php

namespace Home\Controller;

use Home\Controller\BaseController;
use Home\Model\UserModel;

class AdminController extends BaseController {
	
	function index() {
		if (session ( "?sess_admin" )) {
			redirect ( "admin" );
		}
		$this->display ();
	}
	function admin() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			redirect ( "index" );
		}
		$this->assign ( "sys", PHP_OS );
		$this->assign ( "php_ver", PHP_VERSION );
		$this->assign ( "thinkphp_ver", THINK_VERSION );
		$this->display ();
	}
	function get_code() {
		$verify = new \Think\Verify ();
		$verify->fontSize = 14;
		$verify->length = 4;
		$verify->useNoise = false;
		$verify->codeSet = '0123456789';
		$verify->imageW = 120;
		$verify->imageH = 30;
		$verify->entry ( 1 );
	}
	function ajax_login() {
		$imgcode = $_REQUEST ['code'];
		if (! $imgcode) {
			$this->resFail ( 1, "验证码不能为空" );
		}
		$verify = new \Think\Verify ();
		if ($verify->check ( $imgcode, 1 )) {
			$name = htmlspecialchars ( $_REQUEST ["username"] );
			$pwd = htmlspecialchars ( $_REQUEST ["password"] );
			
			$m = M ( "User" );
			$admin = $m->where ( "username = '" . $name . "' and password = '" . $pwd . "'" )->find ();
			
			if ($admin) {
				session ( "sess_admin", $admin );
				unset ( $admin ['password'] );
				$this->resSuccess ( "登录成功" );
			} else {
				$this->resFail ( 1, "用户或密码不正确" );
			}
		} else {
			$this->resFail ( 1, "验证码不正确" );
		}
	}
	function ajax_logout() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		session ( "sess_admin", NULL );
		$this->resSuccess ( "退出登录" );
	}
	function ajax_menu_list() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		$this->resSuccess ( "请求成功", C ( "admin_menu_list" ) );
	}
	function ajax_admin_list() {
		
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		// 分页索引和每页显示数
		$page = 1;
		if (isset ( $_REQUEST ['page'] )) {
			$page = intval ( $_REQUEST ['page'] );
		}
		$page_size = C ( "page_size" );
		if (isset ( $_REQUEST ["page_size"] )) {
			$page_size = intval ( $_REQUEST ["page_size"] );
		}
		
		$data = $this->getList ( $page, $page_size );
		
		$this->resSuccess ( "请求成功", $data );
	}
	function ajax_admin_add() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		$name = htmlspecialchars ( $_REQUEST ['username'] );
		$pwd = htmlspecialchars ( $_REQUEST ["password"] );
		$pwd2 = $_REQUEST ["pwd2"];
		if (! $name)
			$this->resFail ( 1, "用户名不能为空" );
		if (! $pwd)
			$this->resFail ( 1, "密码不能为空" );
		if ($pwd != $pwd2)
			$this->resFail ( 1, "确认密码不正确" );
		
		$m = M ( "User" );
		$total = $m->field ( "count(uid) as total" )->where ( "username = '" . $name . "'" )->find ();
		$total = $total ["total"];
		if ($total > 0) {
			$this->resFail ( 1, "该管理员已存在" );
		}
		
		$admin = array (
				"username" => $name,
				"password" => $pwd 
		);
		$m->add ( $admin );
		$this->resSuccess ( "添加成功" );
	}
	function ajax_admin_del() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		$id = intval ( $_REQUEST ['uid'] );
		$m = M ( "User" );
		$result = $m->where ( "uid = " . $id )->delete ();
		$this->resSuccess ( "删除成功" );
	}
	function ajax_admin_updatepwd() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		$curr_admin = session ( "sess_admin" );
		$old_pwd = htmlspecialchars ( $_REQUEST ["old_pwd"] );
		$pwd = htmlspecialchars ( $_REQUEST ["pwd"] );
		$pwd2 = $_REQUEST ["pwd2"];
		
		if (! $old_pwd)
			$this->resFail ( 1, "旧密码不能为空" );
		if (! $pwd)
			$this->resFail ( 1, "新密码不能为空" );
		if ($pwd != $pwd2)
			$this->resFail ( 1, "确认密码不正确" );
		
		$m = M ( "User" );
		$admin = $m->where ( "username = '" . $curr_admin ['username'] . "' and password = '" . $old_pwd . "'" )->find ();
		if ($admin) {
			$admin ['password'] = $pwd;
			$m->save ( $admin );
			$this->ajax_logout ();
			$this->resSuccess ( "修改密码成功" );
		} else {
			$this->resFail ( 1, "旧密码不正确" );
		}
	}
	function ajax_goods_list() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		$gtypeid = 0;
		if(isset($_REQUEST['gtypeid'])){
			$gtypeid = intval($_REQUEST['gtypeid']);
			session ( "gtypeid", $gtypeid );
		}
		$gtypeid = $_SESSION["gtypeid"];
		
		
		// 分页索引和每页显示数
		$page = 1;
		if (isset ( $_REQUEST ['page'] )) {
			$page = intval ( $_REQUEST ['page'] );
		}
		$page_size = C ( "page_size" );
		if (isset ( $_REQUEST ["page_size"] )) {
			$page_size = intval ( $_REQUEST ["page_size"] );
		}
		
		$data = $this->getGoodlist ($gtypeid, $page, $page_size );
		
		$this->resSuccess ( "请求成功", $data );
	}
	function ajax_goods_add() {
		if (! session ( "?sess_admin" ))
			$this->resFail ( 1, "需要登录才可以访问" );
		
		$gtypeid = 0;
		if(session("?gtypeid"))
		$gtypeid = $_SESSION["gtypeid"];		
		
		$goodsname = htmlspecialchars ( $_REQUEST ["goodname"] );
		$goodscontent = htmlspecialchars ( $_REQUEST ["goodcontent"] );
		$goodsaction = htmlspecialchars ( $_REQUEST ["goodaction"] );
		$goodslocation = htmlspecialchars ( $_REQUEST ["goodlocation"] );
		$goodsprice = htmlspecialchars ( $_REQUEST ["goodprice"] );
		$goodsphoto = htmlspecialchars ( $_REQUEST ['goodphoto'] );
		$goodstime = date ( 'Y-m-d H:i:s', time () );
		
		$m = M ( "goods" );
		$dataclass = array ();
		
		$dataclass ["goodname"] = $goodsname;
		$dataclass ["goodcontent"] = $goodscontent;
		$dataclass ["goodlocation"] = $goodslocation;
		$dataclass ["goodphoto"] = $goodsphoto;
		$dataclass ["goodprice"] = $goodsprice;
		$dataclass ["goodaction"] = $goodsaction;
		$dataclass ["time"] = $goodstime;
		$dataclass["gtypeid"] = $gtypeid; 
		
		$m->add ( $dataclass );
		$this->resSuccess ( "add success"+$goodsname );
	}
	function ajax_goods_photo() {
		if (! session ( "?sess_admin" ))
			$this->resFail ( 1, "需要登录才可以访问" );
		
		$upload = $this->_upload ();
	}
	
	/**
	 * 处理图片上传
	 */
	private function _upload() {
		if (! empty ( $_FILES )) {
			// 图片上传设置
			$config = array (
					'maxSize' => 3145728,
					'savePath' => '',
					'saveName' => array (
							'uniqid',
							'' 
					),
					'exts' => array (
							'jpg',
							'gif',
							'png',
							'jpeg' 
					),
					'autoSub' => true,
					'subName' => array (
							'date',
							'Ymd' 
					) 
			);
			
			$upload = new \Think\Upload ( $config ); // 实例化上传类
			$images = $upload->upload ();
			// 判断是否有图
			if ($images) {
				$info = 'Uploads/' . $images ['Filedata'] ['savepath'] . $images ['Filedata'] ['savename'];
				$miinfo = 'Uploads/' . $images ['Filedata'] ['savepath'] . 'mi_' . $images ['Filedata'] ['savename'];
				$data ['yt'] = $info;
				$data ['mi'] = $miinfo;
				$this->ajaxReturn ( $data );
			} else {
				$this->error ( $upload->getError () ); // 获取失败信息
			}
		}
	}
	function ajax_goods_updata() {
		if (! session ( "?sess_admin" ))
			$this->resFail ( 1, "需要登录才可以访问" );
		if (isset ( $_REQUEST ["gid"] ))
			$id = intval ( $_REQUEST ["gid"] );
		
		$m = M ( "goods" );
		$dataclass = $m->where ( "gid = " . $id )->find ();
				
		$goodsname = htmlspecialchars ( $_REQUEST ["goodname"] );
		$goodscontent = htmlspecialchars ( $_REQUEST ["goodcontent"] );
		$goodsaction = htmlspecialchars ( $_REQUEST ["goodaction"] );
		$goodsphoto = htmlspecialchars ( $_REQUEST ["goodphoto"] );
		$goodslocation = htmlspecialchars ( $_REQUEST ["goodlocation"] );
		$goodsprice = htmlspecialchars ( $_REQUEST ["goodprice"] );
		$goodstime = time ();
		
		$dataclass ["goodname"] = $goodsname;
		$dataclass ["goodcontent"] = $goodscontent;
		$dataclass ["goodlocation"] = $goodslocation;
		$dataclass ["goodphoto"] = $goodsphoto;
		$dataclass ["goodprice"] = $goodsprice;
		$dataclass ["goodaction"] = $goodsaction;
		$dataclass ["time"] = $goodstime;
		
		$m->save ( $dataclass );
		$this->resSuccess ( "添加成功" );
	}
	function ajax_goods_del() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}
		
		$id = intval ( $_REQUEST ['gid'] );
		$m = M ( "goods" );
		$result = $m->where ( "gid = " . $id )->delete ();
		$this->resSuccess ( "删除成功" );
	}
	function ajax_goods_type_list() {
		// 需要登录才可以访问
		if (! session ( "?sess_admin" )) {
			$this->resFail ( 1, "需要登录才可以访问" );
		}		
		// 分页索引和每页显示数
		$page = 1;
		if (isset ( $_REQUEST ['page'] )) {
			$page = intval ( $_REQUEST ['page'] );
		}
		$page_size = C ( "page_size" );
		if (isset ( $_REQUEST ["page_size"] )) {
			$page_size = intval ( $_REQUEST ["page_size"] );
		}
		
		$data = $this->getGoodTypeList($page, $page_size);
		
		$this->resSuccess ( "请求成功", $data );
	}
	function ajax_goods_type_add() {
		
		if (! session ( "?sess_admin" ))
			$this->resFail ( 1, "需要登录才可以访问" );
		
		$goodstypename = htmlspecialchars ( $_REQUEST ["goodtypename"] );
		$goodstypephoto = htmlspecialchars ( $_REQUEST ['goodtypephoto'] );
		$goodstypetime = date ( 'Y-m-d H:i:s', time () );
		
		$m = M ( "goods_type" );
		$dataclass = array ();
		
		$dataclass ["goodtype"] = $goodstypename;
		$dataclass ["goodtypephoto"] = $goodstypephoto;
		$dataclass['time'] = $goodstypetime;
		
		
		$m->add ( $dataclass );
		$this->resSuccess ( "add success");
		
	}
	function ajax_goods_type_del() {
	}
	function getGoodTypeList($page, $page_size) {
		$m = M ( "goods_type" );
		
		$total = $m->field ( "count(gtypeid) as total" )->select ();
		$total = $total ["total"];
		$page_count = page_count ( $total, $page_size );
		$offset = ($page - 1) * $page_size;
		$limit = $page_size;
		$list = $m->order ( "gtypeid desc" )->limit ( $offset . ", " . $limit )->select ();
		
		return array (
				"page_size" => $page_size,
				"page_count" => $page_count,
				"total" => intval ( $total ),
				"page" => $page,
				"list" => $list 
		);
	}
	function getGoodlist($gtypeid = 0,$page, $page_size) {
		$m = M ( "goods" );
		
		$total = $m->field ( "count(gid) as total" )->select ();
		$total = $total ["total"];
		$page_count = page_count ( $total, $page_size );
		$offset = ($page - 1) * $page_size;
		$limit = $page_size;
		if($gtypeid == 0){
			$list = $m->order ( "gid desc" )->limit ( $offset . ", " . $limit )->select ();
			
		}else {
			$map['gtypeid']  = $gtypeid;
			$list = $m->where($map)->order ( "gid desc" )->limit ( $offset . ", " . $limit )->select ();
		}
		foreach ( $list as &$v )
			$v ["time"] = date ( "Y-m-d H:i:s", $v ["time"] );
		
		return array (
				"page_size" => $page_size,
				"page_count" => $page_count,
				"total" => intval ( $total ),
				"page" => $page,
				"list" => $list ,
				"gtypeid" => $gtypeid
		);
	}
	function getList($page, $page_size) {
		$m = M ( "User" );
		
		$total = $m->field ( "count(uid) as total" )->select ();
		$total = $total ["total"];
		$page_count = page_count ( $total, $page_size );
		$offset = ($page - 1) * $page_size;
		$limit = $page_size;
		$list = $m->order ( "uid desc" )->limit ( $offset . ", " . $limit )->select ();
		foreach ( $list as &$v )
			$v ["time"] = date ( "Y-m-d H:i:s", $v ["time"] );
		
		return array (
				"page_size" => $page_size,
				"page_count" => $page_count,
				"total" => intval ( $total ),
				"page" => $page,
				"list" => $list 
		);
	}
}
















