<?php

namespace Admin\Controller;

use Admin\Logic\UserinfoLogic;
use Think\Controller;
// use Think\Session\Driver;
// use Think\Cache\Driver\Memcache;
class UserController extends Controller {
	/**
	 *
	 * @author shuangshuang
	 *         2015/7/24
	 */
	public function login() {
		if (IS_POST) {
			if (isset ( $_SESSION ['username'] ) == '') {
				$lifetime = '3600';
				session_set_cookie_params ( $lifetime );
				session_start ();
			}
			$username = $_POST ['username'];
			$password = $_POST ['password'];
			$UserInfo = new UserinfoLogic ();
			$result = $UserInfo->login ( $username, $password );
		
			if (is_null( $result )) {
				$this->redirect("User/login");
			} else {
				$_SESSION ['username'] = $result ['username'];
				$_SESSION ['nickname'] = $result ['nickname'];
				$_SESSION ['id'] = $result ['id'];
				$this->redirect ( 'Index/index' );
			}
		} else {
			$name = get_nickname ();
			
			if (! empty ( $name )) {
				$this->redirect ( "Index/index" );
			} else {
				$this->display ( 'User/login' );
			}
		}
	}
	/*
	 *
	 */
	public function register() {
		if (IS_POST) {
			$param ['username'] = strtolower ( $_POST ['username'] );
			$param ['nickname'] = $_POST ['nickname'];
			$param ['password'] = md5 ( $_POST ['password'] );
			$param ['reg_time'] = time ();
			$param ['reg_ip'] = get_client_ip ();
			$param ['status'] = '0';
			$UserInfo = new UserinfoLogic ();
			$result = $UserInfo->addUserinfo ( $param );
			if ($result > 0) {
				$this->success ( '注册成功', U ( 'User/login' ) );
			} else {
				$this->error ( '注册失败' );
			}
		} else {
			$this->error ( '非法数据请求！' );
		}
	}
	/* 用户注销账户 */
	public function logout() {
		session_destroy ();
		$this->redirect ( 'User/login' );
	}
	public function memberlist() {
		$user = new UserinfoLogic ();
		$table = "member_user";
		$data = "";
		$result = $user->selectUserinfo ( $data, $table );
		$this->assign ( 'memberdata', $result );
		$this->display ( 'User/memberlist' );
	}
	public function adminlist() {
		$selectdata = new UserinfoLogic ();
		$table = 'admin_user';
		$data = "";
		$result = $selectdata->selectUserinfo ( $data, $table );
		$this->assign ( 'admindata', $result );
		$this->display ( 'User/adminlist' );
	}
	public function systemlog() {
		$this->display ( 'User/systemlog' );
	}
	
	/* 用户信息认证管理 */
	public function infomanage() {
		$this->display ( 'User/infomanage' );
	}
	public function teamlist() {
		$this->display ( 'User/teamlist' );
	}
	public function friendlist() {
		$this->display ( 'User/friendlist' );
	}
}












































































































