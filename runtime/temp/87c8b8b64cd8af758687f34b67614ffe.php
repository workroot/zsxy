<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"./themes/default/login/weixin.html";i:1571993490;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>修改密码</title>
	<link rel="stylesheet" href="__PUBLIC__/css/style.css">
	<link rel="stylesheet" href="__PUBLIC__/css/login.css">
</head>
<body>
<div class="container">
	<div class="logo_box">
		<img src="<?php echo $login['thumb']; ?>" alt="">
	</div>
	<div class="login_box">
		<p class="login_p">修改密码</p>
		<div class="ipt_box">
			<img src="__PUBLIC__/img/phone.png" alt="">
			<input type="text" id='mobile' name="mobile" placeholder="请输入手机号">
		</div>
		<div class="ipt_box">
			<img src="__PUBLIC__/img/yanzhengma.png" alt="">
			<input type="text" id='yanzhengma' name="yanzhengma" placeholder="请输入验证码" style="width:60%;">
			<div id="btnsms" style="text-align: center; line-height:30px;float:right;width:38%;height:30px;background:#712cc0;color:#fff;font-size:14px;margin-top: 8px;">发送</div>
		</div>

		<div class="ipt_box">
			<img src="__PUBLIC__/img/password.png" alt="">
			<input type="password" id='password' name="password" placeholder="请输入密码">
		</div>
		<div class="ipt_box">
			<img src="__PUBLIC__/img/password.png" alt="">
			<input type="password" id='passwords' name="password" placeholder="请确认密码">
		</div>
		<button class="login_btn">完成</button>
		<div class="clearfix"></div>
	</div>
</div>

<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script>
<script type="text/javascript" src="__PUBLICS__/layer/layer.js" ></script>
<script>
	$("#btnsms").on('click',function (){
		var mobile=$('#mobile').val();
		var yanzhengma = $("#yanzhengma").val();
		if($("#mobile").val().length != 11){
			layer.msg("手机格不正确！");
			return false;
		}
		$.ajax({
			type: "post",
			url: "<?php echo url('api/sms/send'); ?>",
			data: {"mobile":mobile},
			success: function(data){
				if(data != 0){
					layer.msg("发送成功");
					time()
				}else{
					layer.msg("请重新发送！");
				}
			},
			error:function(){
				layer.msg('失败');
			}

		});
		var wait=120;
		function time() {
			if (wait == 0) {
				$("#btnsms").removeClass("btnclass");
				$("#btnsms").html("发送");
				wait = 120;
			} else {
				$("#btnsms").addClass("btnclass");
				$("#btnsms").html(wait+"s");
				wait--;
				setTimeout(function() {
							time()
						},
						1000)
			}
		}
	});
	$('.login_btn').on('click',function(){
		var mobile=$('#mobile').val();
		var yanzhengma=$('#yanzhengma').val();
		var password = $('#password').val();
		var passwords = $('#passwords').val()
		if(yanzhengma == ''){
			layer.msg('验证码不能为空');
			return false;
		}
		if(password == ''){
			layer.msg('新密码不能为空');
			return false;
		}
		if(password != passwords){
			layer.msg('两次输入的密码不一致');
			return false;
		}
		if(mobile.length !== 11){
			layer.msg("手机号码格式不正确！");
			return false;
		}
		$.ajax({
			url:"<?php echo url('api/login/duanxin'); ?>",
			type:"post",
			datatype:'json',
			data:{'mobile':mobile,'code':yanzhengma,'password':password},
			success:function(data)
			{
				if(data == 1){
					layer.msg('设置密码成功');
					window.location.href="<?php echo url('index/login/login'); ?>";
				}else if(data == 3){
					layer.msg('验证码错误');
				}else if(data == 4){
					layer.msg('手机号错误');
				}else if(data == 5){
					layer.msg('验证超时');
				}else{
					layer.msg('验证失败');
					return false;
				}

			},
			error:function(){
				layer.msg('失败');
			}
		});
	});
</script>
</body>
</html>