<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {
	private $user;
	
	//登录注册界面显示
	
	public function loginView() {
		$this->display ();
	}
	public function registerView() {
		$this->display ();
	}
	
	/**
	 * 登录
	 */
	public function login($username = "",$password = "") {
		$this->user = D ( "User" );
		if (IS_GET) {
			if (ini_get ( "magic_quotes_gpc" ) == "1") {
				$data = stripcslashes ( $data );
			}
			
			$info->username = $username;
			$info->password = $password;
			
			if ($this->isHasUser ( $info )) {
				echo $this->returnData ( "success", "登录成功" );
			} else {
				echo $this->returnData ( "error", "登录失败" );
			}
		} else {
			echo $this->returnData ( "error", "请求失败" );
		}
	}
	
	/**
	 * 注册
	 */
	public function register() {
		$this->user = D ( "User" );
		
		if (IS_POST) {
			$info->username = I ( 'post.username' );
			$info->email = I ( 'post.email' );
			$info->phone = I ( 'post.phone' );
			$info->password = I ( 'post.password' );
			
			if ($this->isHasUser ( $info, false )) {
				echo $this->returnData ( "error", "该用户已经存在了" );
			} else {
				$addData ['username'] = $info->username;
				$addData ['password'] = $info->password;
				$addData ['email'] = $info->email;
				$addData ['phonenum'] = $info->phone;
				$addData['time'] = time();
				
				$isAdd = $this->user->data ( $addData )->add ();
				
				if ($isAdd) {
					echo $this->returndata ( "success", "注册成功，请保存本地的用户信息" );
				} else {
					echo $this->returndata ( "error", "注册失败，请检查上传数据" );
				}
			}
		} else {
			echo $this->returnData ( "error", "请求方式不对" );
		}
	}
	
	/**
	 * 完善用户信息
	 */
	public function prefectionInfo() {
		$this->user = D ( "User" );
	}
	
	/**
	 * 更改用户信息
	 */
	public function updateInfo() {
		$this->user = D ( "User" );
	}
	
	/**
	 * 删除用户信息
	 */
	public function deleteInfo() {
		$this->user = D ( "User" );
	}
	
	/**
	 * 判断数据库中是否有该用户
	 */
	private function isHasUser($info, $islogin = true) {
		$username = $info->username;
		$email = $info->email;
		$phone = $info->phone;
		$password = $info->password;
		
		if ($islogin) {
			// 登录时使用
			
			// 如果传入的是昵称
			if (! empty ( $username )) {
				$condition ['username'] = $username;
			}
			// 如果传入的是email
			if (! empty ( $email )) {
				$condition ['email'] = $email;
			}
			// 如果传入的是手机号
			if (! empty ( $phone )) {
				$condition ['phone'] = $phone;
			}
			$condition ['password'] = $password;
		} else {
			// 注册时判断
			$condition ['username'] = $username;
			$condition ['email'] = $email;
			$condition ['phone'] = $phone;
			$condition ['_logic'] = 'OR';
		}
		
		$reData = $this->user->where ( $condition )->select ();
		return (! empty ( $reData ));
	}
	
	/**
	 * json返回值封装
	 * 
	 * @param unknown $status        	
	 * @param unknown $des        	
	 * @return string
	 */
	private function returnData($status, $des) {
		$data ['status'] = $status;
		$data ['des'] = $des;
		
		return json_encode ( $data );
	}
}