<?php
namespace Home\Controller;
use Home\Controller\BaseController;
class GoodsController extends BaseController{
	
	function ajax_goods_list() {		
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
	
	
	function ajax_goods_type_list() {
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
	
	
	
}