<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__ . '/Public/HT', // 更改默认的/Public 替换规则
		'__JS__' => '/Public/JS/', // 增加新的JS类库路径替换规则
		'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则

	),
	//'SHOW_PAGE_TRACE' => true,

);