<?php
return array(
	//'配置项'=>'配置值'
	'DB_HOST'=>'localhost',//数据库地址
// 	'DB_HOST'=>'59.188.8.43',//数据库地址
	'DB_TYPE'=>'mysql',//数据库类型
	'DB_USER'=>'returnt1_jj',//数据库用户名
	'DB_PWD'=>'earlyso',//数据库密码
	'DB_NAME'=>'returnt1_jj',//数据库表名
	'DB_PORT'=>'3306',//数据库端口
	'DB_PREFIX' => 'gonghe_', // 数据库表前缀

    'DEFAULT_THEME'         =>  'themes',	// 默认模板主题名称

	'__TMPL__'      =>  APP_TMPL_PATH,  // 项目模板目录
	'__ROOT__'      =>  __ROOT__,       // 当前网站地址
	'__APP__'       =>  __APP__,        // 当前项目地址
	'__GROUP__'     =>  defined('GROUP_NAME')?__GROUP__:__APP__,
	'__ACTION__'    =>  __ACTION__,     // 当前操作地址
	'__SELF__'      =>  __SELF__,       // 当前页面地址
	'__URL__'       =>  __URL__,
	'../Public'     =>  APP_TMPL_PATH.'Public',// 项目公共模板目录
	'__PUBLIC__'    =>  __ROOT__.'/Public',// 站点公共目录
	'__FILE__'		=>__FILE__,
	'DEFAULT_TIMEZONE'      => 'PRC', // 默认时区
	
	'UMEDITOR_HOME_URL' => "__PUBLIC__/Static/ue",

	//开启布局
	// 'LAYOUT_ON'=>false,
	'LAYOUT_NAME'=>'Base/common',
	//创建分组
	'MODULE_ALLOW_LIST'=>'Admin,Home',
	
	//显示调试信息
	'SHOW_PAGE_TRACE'=>true,

	 /* 错误设置 */
    'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
    'ERROR_PAGE'            =>  'Public:error',	// 错误定向页面
    'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
    'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数

	'URL_CASE_INSENSITIVE'  =>  false,   // 默认false 表示URL区分大小写 true则表示不区分大小写



    //关闭缓存
	'TMPL_CACHE_ON'   => false,  // 默认开启模板编译缓存 false 的话每次都重新编译模板

	'ACTION_CACHE_ON'  => false,  // 默认关闭Action 缓存

	'HTML_CACHE_ON'   => false,   // 默认关闭静态缓存

	'APP_DEBUG'=>true,
	'DB_FIELD_CACHE'=>false,
	'HTML_CACHE_ON'=>false,

);