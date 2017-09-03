<?php
return array(
	'TMPL_PARSE_STRING' => array(
		'__CSS__' 	=> __ROOT__.'/Public/ace/css',
		'__JS__'  	=> __ROOT__.'/Public/ace/js',
		'__IMG__' 	=> __ROOT__.'/Public/ace/images',
		'__AVATAR__'=> __ROOT__.'/Public/ace/avatars'
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
);