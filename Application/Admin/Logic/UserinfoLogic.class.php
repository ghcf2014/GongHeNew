<?php

namespace Admin\Logic;

use Admin\Api\Userinfo;
use Admin\Model\ModelModel;

class UserinfoLogic implements Userinfo {
	

	public function addUserinfo($data) {
		$user = D ( 'AdminUser' ); // 实例化User对象
		if ($user->create ( $data )) {
			$user->startTrans ();
			$userdata = $user->add ( $data );
			if ($userdata > 0) {
				$user->commit ();
			} else {
				$user->rollback ();
			}
		}else{
			exit($user->getError());
		}
		return $userdata;
	}
	
	// 用户登录
	public function login($username, $password) {
		$user = M('admin_user');
		$condition['username']=$username;
		$condition['password']=md5($password);
		$result = $user->where ( $condition)->find();
		return $result;
	}
	// 用户注销
	public function logout() {
	}
	
	// 用户邮件发送
	public function send_email($tel, $title, $content) {
	}
}