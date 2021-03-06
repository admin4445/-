<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\Users\admin\Desktop\tp5funtrue\public/../application/admin\view\index\show.html";i:1582890334;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页--layui后台管理模板 2.0</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/static/admin/css/public.css" media="all" />
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote layui-bg-green">
		<div id="nowTime"></div>
	</blockquote>
	<div class="layui-row layui-col-space10 panel_box">
		<div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
			<a href="javascript:;" data-url="http://fly.layui.com/case/u/3198216" target="_blank">
				<div class="panel_icon layui-bg-green">
					<i class="layui-anim seraph icon-good"></i>
				</div>
				<div class="panel_word">
					<span>为我点赞</span>
					<cite>点赞地址链接</cite>
				</div>
			</a>
		</div>
		
	
		<div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
			<a href="javascript:;" data-url="page/user/userList.html">
				<div class="panel_icon layui-bg-orange">
					<i class="layui-anim seraph icon-icon10" data-icon="icon-icon10"></i>
				</div>
				<div class="panel_word userAll">
					<span><?php echo $count; ?></span>
					<em>用户总数</em>
					<cite class="layui-hide">用户中心</cite>
				</div>
			</a>
		</div>
		
		<div class="panel layui-col-xs12 layui-col-sm6 layui-col-md4 layui-col-lg2">
			<a href="javascript:;">
				<div class="panel_icon layui-bg-blue">
					<i class="layui-anim seraph icon-clock"></i>
				</div>
				<div class="panel_word">
					<span class="loginTime"></span>
					<cite>上次登录时间</cite>
				</div>
			</a>
		</div>
	</div>
	
	<div class="layui-row layui-col-space10">
		<div class="layui-col-lg6 layui-col-md12">
			<blockquote class="layui-elem-quote title">系统基本参数</blockquote>
			<table class="layui-table magt0">
				<colgroup>
					<col width="150">
					<col>
				</colgroup>
				<tbody>
				<tr>
					<td>当前php版本</td>
					<td class="version"><?php echo $phpvesion; ?></td>
				</tr>
				<tr>
					<td>服务器环境</td>
					<td class="server"><?php echo $sysos; ?></td>
				</tr>
				<tr>
					<td>数据库版本</td>
					<td class="dataBase"><?php echo $mysql; ?></td>
				</tr>
				<tr>
					<td>thinkphp版本</td>
					<td class="dataBase"><?php echo THINK_VERSION; ?></td>
				</tr>
				<tr>
					<td>最大上传限制</td>
					<td class="dataBase"><?php echo $filesize; ?></td>
				</tr>
				
				</tbody>
			</table>
			
		</div>
		
	</div>

	<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
	<script type="text/javascript" src="/static/admin/js/main.js"></script>
</body>
</html>