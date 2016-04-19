<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE' => 'Home',
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_NAME' => 'lib_system', // 数据库名
	'DB_USER' => 'yzz', // 用户名
	'DB_PWD' => 'yzz54321', // 密码
	'DB_PORT' => 3306, // 端口
	'DB_PREFIX' => 'yzz_', // 数据库表前缀
	'DB_CHARSET' => 'utf8', // 字符集
	'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'USER_AUTH_ON' => true, //开启认证
	'USER_AUTH_TYPE' => 1, //用户认证使用SESSION标记
	'USER_AUTH_KEY' => 'authId', //设置认证SESSION的标记名称
	'ADMIN_AUTH_KEY' => 'admin', //管理员用户标记
	'USER_AUTH_MODEL' => 'User', //验证用户的表模型u_user
	'AUTH_PWD_ENCODER' => 'md5', //用户认证密码加密方式
	'USER_AUTH_GATEWAY' => '/Admin/Login', //默认的认证网关
	'NOT_AUTH_MODULE' => 'Home', //默认不需要认证的模块'A,B,C'
	'REQUIRE_AUTH_MODULE' => '', //默认需要认证的模块
	'NOT_AUTH_ACTION' => '', //默认不需要认证的动作
	'REQUIRE_AUTH_ACTION' => '', //默认需要认证的动作
	'GUEST_AUTH_ON' => false, //是否开启游客授权访问
	'GUEST_AUTH_ID' => 0, //游客标记
	'RBAC_ROLE_TABLE' => 'think_role', //角色表
	'RBAC_USER_TABLE' => 'think_role_user', //角色分配表
	'RBAC_ACCESS_TABLE' => 'think_access', //权限分配表
	'RBAC_NODE_TABLE' => 'think_node', //节点表

);