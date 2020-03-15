<?php 
use think\Request;
//配置文件
return array(
	// 视图输出字符串内容替换
	'view_replace_str'       => array(
		'__CSS__'   => '/static/admin/css',
		'__JS__'    => '/static/admin/js',
		'__IMG__'   => '/static/admin/images',
		'__LAY__'   => '/static/admin/layui',
		//域名
		'__DOMAIN__'=> Request::instance()->domain()
	),
	'template'  =>  [
	    'layout_on'     =>  true,
	    'layout_name'   =>  'layout',
	    'layout_item'   => '{__REPLACE__}'
	]
);