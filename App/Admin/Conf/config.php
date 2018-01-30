<?php
return array(
	'TMPL_PARSE_STRING' => array(
		'__COMMON__'   => __ROOT__.'/Public/common',
		'__ADMIN__' 	=> __ROOT__.'/Public/admin',
		'__HOME__' 	=> __ROOT__.'/Public/home',
		'__PLUGINS__'   => __ROOT__.'/Public/plugins',
		),

	'SHOW_PAGE_TRACE' =>true, 

	// 数据库配置
	'DB_TYPE'        =>  'mysql',     // 数据库类型
	'DB_HOST'        =>  'localhost', // 服务器地址
	'DB_NAME'        =>  'xltcmf',    // 数据库名
	'DB_USER'        =>  'root',      // 用户名
	'DB_PWD'         =>  '',          // 密码
	'DB_PORT'        =>  '3306',      // 端口
	'DB_PREFIX'      =>  'xlt_',      // 数据库表前缀

	// 权限配置
	'AUTH_CONFIG' => array(
		'AUTH_ON'           => true,                // 认证开关
        'AUTH_TYPE'         => 1,                   // 认证方式，1为实时认证；2为登录认证。
        'AUTH_GROUP'        => 'xlt_auth_group',      	// 用户组数据表名
        'AUTH_GROUP_ACCESS' => 'xlt_auth_group_access',	// 用户-用户组关系表
        'AUTH_RULE'         => 'xlt_menu',         		// 权限规则表
        'AUTH_USER'         => 'xlt_admin'             	// 用户信息表
		),
);