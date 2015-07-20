<?php
/** 
 * 验证码检查 
 */  
function check_verify($code, $id = ""){  
    $verify = new \Think\Verify();  
    return $verify->check($code, $id);  
}
/**
 * 检测用户是否登录
 *
 * @return integer 0-未登录，大于0-当前登录用户ID
 */
function is_login() {
	$user = session ( 'user_auth' );
	if (empty ( $user )) {
		return 0;
	} else {
		return $user;
	}
}
function is_msg() {
	$map['uid'] = session ( 'user_auth' );
	$name = M ( 'member_massage' )->where($map)->count();
	return $name;
}
/**
 * 根据用户ID获取用户名
 *
 * @param integer $uid
 *        	用户ID
 * @return string 用户名
 */
function get_username() {
	$map = session ( 'user_auth' );
	$name = M ( 'member_user' )->field ( 'user_name' )->find ($map);
	session ( 'user_auth.username',$name['user_name']);
	return $name['user_name'];
}
function username($uid = 0) {
	$map = $uid;
	$name = M ( 'member_user' )->field ( 'user_name' )->find ($map);
	return $name['user_name'];
}

?>