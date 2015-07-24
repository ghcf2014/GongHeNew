<?php
namespace Admin\Api;

interface Userinfo{

	//用户注册
	public function addUserinfo($data);
	//用户登录
	public function login($username,$password);
	//用户注
	public function logout();

	//用户邮件发送
	public function send_email($tel,$title,$content);





}



