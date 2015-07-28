<?php

namespace Admin\Api;

interface Userinfo {
	
	// 用户注册
	public function addUserinfo($data);
	// 用户登录
	public function login($username, $password);
	// 用户注
	public function logout();
	public function selectUserinfo($data, $table, $id = "");
}



