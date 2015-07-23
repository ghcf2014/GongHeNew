<?php
namespace Admin\Logic;
use Admin\Api\Userinfo;
class UserinfoLogic implements Userinfo{


	
	//用户注册
	public function addUserinfo($data){
		$user=D('AdminUser'); // 实例化User对象
        $userdata=$user->add($data);
        return $userdata;
	}
	//用户登录
	public function login($username,$password,$verify){

	}
	//用户注销
	public function logout(){

	}

	//用户邮件发送
	public function send_email($tel,$title,$content){

	}

}