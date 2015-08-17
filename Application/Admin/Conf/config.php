<?php
return array(
	//'配置项'=>'配置值'
	/* SESSION 和 COOKIE 配置 */
	'SESSION_PREFIX' => 'gonghe_s', //session前缀
	'COOKIE_PREFIX'  => 'gonghe_c', // Cookie前缀 避免冲突
	'VAR_SESSION_ID' => 'session_id',	//修复uploadify插件无法传递session_id的bug
	
	/* 后台错误页面模板 */
	'TMPL_ACTION_ERROR'     =>  MODULE_PATH.'themes/Public/error.html', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  MODULE_PATH.'themes/Public/success.html', // 默认成功跳转对应的模板文件
	'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'themes/Public/exception.html',// 异常页面的模板文件
	
	'__PUBLIC__'=>__ROOT__.'/Public/',
);