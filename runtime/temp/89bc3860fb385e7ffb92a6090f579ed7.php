<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"C:\Users\admin\Desktop\tp5funtrue\public/../application/admin\view\article\artedit.html";i:1582729250;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章列表--layui后台管理模板 2.0</title>
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
<form class="layui-form layui-row layui-col-space10">
	<div class="layui-col-md9 layui-col-xs12">
		<div class="layui-row layui-col-space10">
			<div class="layui-col-md9 layui-col-xs7">
				<input type="hidden" id="news_id" >
				<div class="layui-form-item magt3">
					<label class="layui-form-label">文章标题</label>
					<div class="layui-input-block">
						<input type="text" class="layui-input newsName" lay-verify="newsName" placeholder="请输入文章标题">
					</div>
				</div>
				<div class="layui-form-item magt3">
					<label class="layui-form-label">作者</label>
					<div class="layui-input-block">
						<input type="text" class="layui-input author" lay-verify="newsName" placeholder="请输入作者">
					</div>
				</div>
				 <div class="layui-form-item">
				    <label class="layui-form-label">文章分类</label>
				    <div class="layui-input-block">
				      <select name="interest" lay-filter="aihao" id="interest">
				       
				      </select>
				    </div>
				  </div>
				
			</div>
			<div class="layui-col-md3 layui-col-xs5">
				<div class="layui-upload-list thumbBox mag0 magt3">
					<img class="layui-upload-img thumbImg">
					<input type="hidden" id="thumb">
				</div>
			</div>
		</div>
		<div class="layui-form-item magb0">
			<label class="layui-form-label">文章内容</label>
			<div class="layui-input-block">
				<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="news_content"> </textarea>
			</div>
		</div>
	</div>
	<div class="layui-col-md3 layui-col-xs12">
		<blockquote class="layui-elem-quote title magt10"><i class="layui-icon">&#xe609;</i> 发布</blockquote>
		<div class="border">
			<div class="layui-form-item layui-hide releaseDate">
				<label class="layui-form-label"></label>
				<div class="layui-input-block">
					<input type="text" class="layui-input" id="release" placeholder="请选择日期和时间" readonly />
				</div>
			</div>
			<div class="layui-form-item openness">
				<label class="layui-form-label"><i class="seraph icon-look"></i> 显示</label>
				<div class="layui-input-block">
					<input type="radio" name="openness"  title="是" lay-skin="primary" checked value="1" />
					<input type="radio" name="openness"  title="否" lay-skin="primary"  value="0" />
				</div>
			</div>
			<hr class="layui-bg-gray" />
			<div class="layui-right">
				<a class="layui-btn layui-btn-sm" lay-filter="editNews" lay-submit><i class="layui-icon">&#xe609;</i>发布</a>
				<a class="layui-btn layui-btn-primary layui-btn-sm" lay-filter="look" lay-submit>预览</a>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/newsedit.js"></script>
</body>
</html>