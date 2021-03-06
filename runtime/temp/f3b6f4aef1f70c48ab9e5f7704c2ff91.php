<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\Users\admin\Desktop\tp5funtrue\public/../application/admin\view\user\login.html";i:1582896215;}*/ ?>

<!DOCTYPE html>
<html class="loginHtml">
<head>
	<meta charset="utf-8">
	<title>登录--layui后台管理模板 2.0</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="../../favicon.ico">
	<link rel="stylesheet" href="/static/admin/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/static/admin/css/public.css" media="all" />
</head>
<body class="loginBody">
	<form class="layui-form" >
		<div class="login_face"><img src="/static/admin/images/face.jpg" class="userAvatar"></div>
		<div class="layui-form-item input-item">
			<label for="userName">用户名</label>
			<input type="text" placeholder="请输入用户名" autocomplete="off" id="userName" class="layui-input" lay-verify="required">
		</div>
		<div class="layui-form-item input-item">
			<label for="password">密码</label>
			<input type="password" placeholder="请输入密码" autocomplete="off" id="password" class="layui-input" lay-verify="required">
		</div>
		<div class="layui-form-item input-item" id="imgCode" >
			<label for="code">验证码</label>
			<input type="text" placeholder="请输入验证码" autocomplete="off" id="code" class="layui-input">
			<img src="<?php echo captcha_src(); ?>" style="width: 100px;height: 35px" id="img"  >

		</div>
		
		<div class="layui-form-item">
			<button class="layui-btn layui-block" lay-filter="login" lay-submit>登录</button>
		</div>
		
	</form>
	<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
	<script type="text/javascript" src="/static/admin/js/login.js"></script>
	<script type="text/javascript" src="/static/admin/js/cache.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		layui.use(['form','layer','jquery'],function(){
		    var form = layui.form,
		        layer = parent.layer === undefined ? layui.layer : top.layer
		        $ = layui.jquery;

		    $(".loginBody .seraph").click(function(){
		        layer.msg("这只是做个样式，至于功能，你见过哪个后台能这样登录的？还是老老实实的找管理员去注册吧",{
		            time:5000
		        });
		    })

		    //登录按钮
		    form.on("submit(login)",function(data){
		        $(this).text("登录中...").attr("disabled","disabled").addClass("layui-disabled");
		       
		            var username = $.trim($('#userName').val());
		            var passwd = $.trim($('#password').val());
		            var code = $.trim($('#code').val());
		          
		            setTimeout(function(){
		                $.post("http://www.tpfuntrue.com/admin/user/dologin",{'username':username,'passwd':passwd,'code':code},function (res) {
		                    if(res.code>0){
		                        //输入错误时刷新验证码
		                        layer.alert(res.msg,{icon:2});
		                         window.location.reload();
		                        
		                    }else{
		                    	
		                    	localStorage.setItem("username",res.data);
		                        layer.alert(res.msg);
		                        setTimeout(function () {
		                           window.location.href = "<?php echo url('Index/index'); ?>";
		                        },1000)
		                    }
		                 });
		              
		            },1000);
		        return false;
		    })

		    //表单输入效果
		    $(".loginBody .input-item").click(function(e){
		        e.stopPropagation();
		        $(this).addClass("layui-input-focus").find(".layui-input").focus();
		    })

		    $(".loginBody .layui-form-item .layui-input").focus(function(){
		        $(this).parent().addClass("layui-input-focus");
		    })

		    $(".loginBody .layui-form-item .layui-input").blur(function(){
		        $(this).parent().removeClass("layui-input-focus");
		        if($(this).val() != ''){
		            $(this).parent().addClass("layui-input-active");
		        }else{
		            $(this).parent().removeClass("layui-input-active");
		        }
		    })
		})

		$(document).ready(function(){
			$('#img').click(function(){
				$('#img').attr('src',"<?php echo captcha_src(); ?>");
			});
		});
	</script>



</body>
</html>