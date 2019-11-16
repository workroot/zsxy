<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"./themes/default/chaxun/query.html";i:1573133816;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>信千金</title>
	<link rel="stylesheet" href="__PUBLIC__/bg/css/style.css">
	<link rel="stylesheet" href="__PUBLIC__/bg/css/index2.css">
	<script src="__PUBLIC__/js/jquery.min.js"></script>
	<script src="__PUBLICS__/layer/layer.js"></script>
	<style>
		.report_btn{
			text-align: center;
			line-height: 0.63rem;
			text-decoration: none;
		}
		.report_tips{
			font-size: 0.22rem;
    		font-weight: bold;
    		color: #ff7200;
    		padding: 0.1rem 0 0.1rem 0;
    		text-align: center;
		}
		.agreement a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<div class="container">
	<img class="top_img" src="<?php echo $gj['thumb']; ?>" alt="">
	<a class="report_btn" href="<?php echo url('/index/chaxun/yangshi3'); ?>">示例报告</a>
	<div class="content_box">
		<div class="content">
			<div class="form_box">
				<p class="report_tips">切勿相信他人以提高信用额度、优化征信等手段诈骗钱财</p>
				<p class="report_tips">不查央行征信，无任何爬虫数据</p>
				<div class="input_box clearfix">
					<img src="__PUBLIC__/bg/imgs/3.png" alt="">
					<input type="text" name="username" id="username"  placeholder="请输入您的真实姓名">
					<input id="pid" type="hidden" name="pid" value="<?php echo $pid; ?>" placeholder="请输入本人手机号">
					<input id="sid" type="hidden" name="sid" value="<?php echo $sid; ?>" placeholder="请输入本人手机号">
					<input id="price" type="hidden" name="price" value="<?php echo $price; ?>" placeholder="请输入本人手机号">
					<input id="password" type="hidden" name="password" value="123456" placeholder="请输入本人手机号">
				</div>
				<div class="input_box clearfix">
					<img src="__PUBLIC__/bg/imgs/3.1.png" alt="">
					<input type="text" name="idcard" id="idcard" placeholder="请输入您的身份证号">
				</div>
				<div class="input_box clearfix">
					<img src="__PUBLIC__/bg/imgs/3.2.png" alt="">
					<input type="text" name="mobile" id="mobile" placeholder="请输入您的手机号码">
				</div>
				<p class="agreement">
					<input type="checkbox" name="radio" id="radio">我已阅读并同意<a href="<?php echo url('index/login/protocol'); ?>">《报告授权查询协议》</a>
				</p>
				<p class="agreement">
					<input type="checkbox" name="insurance" id="insurance" value="1">本人自愿免费领取最高100万免费保障,我已阅读<a href="<?php echo url('index/login/protocol1'); ?>">《赠险须知》</a><a href="<?php echo url('index/login/protocol2'); ?>">《用户协议》</a>
				</p>
				<button class="pay_btn">立即打赏检测</button>
				<div class="clear"></div>
			</div>
			<p class="report" style="padding: 0 0rem 0.45rem 0px;">
				<a href="<?php echo url('/index/user/chaxunjilu'); ?>" style="text-decoration: none;">
					<img src="__PUBLIC__/bg/imgs/5.1.png" alt="">我的查询记录
				</a>
			</p>
			<!-- <p class="report_tips">*切勿相信他人以提高信用额度，优化征信等手段诈骗钱财</p> -->
		</div>
		<div class="content">
			<p class="test_content">
				<img src="__PUBLIC__/bg/imgs/dh.png" alt=""> 检测内容说明 <img src="__PUBLIC__/bg/imgs/dhf.png" alt="">
			</p>
			<p class="test_content1">Description Of Monitoring Elements</p>
			<div class="test_box clearfix">
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/sm.png" alt="">
						风险信息扫描</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/xd.png" alt="">
						信贷保镖报告</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/ger.png" alt="">
						黑名单风险监测</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/qz.png" alt="">
						欺诈风险监测</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/mz.png" alt="">
						风险命中关注</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/sf.png" alt="">
						身份关联信息</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/sj.png" alt="">
						手机号对应风险</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/wd.png" alt="">
						网贷风险信息</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/sx.png" alt="">
						失信情况总览</p>
				</div>
				<div class="test_item">
					<p><img src="__PUBLIC__/bg/imgs/zs.png" alt="">
						多头借贷风险</p>
				</div>
			</div>
		</div>
		<div class="content">
			<p class="test_content">
				<img src="__PUBLIC__/bg/imgs/dh.png" alt=""> 我们的优势 <img src="__PUBLIC__/bg/imgs/dhf.png" alt="">
			</p>
			<p class="test_content1">Our Strengths</p>
			<div class="contrast">
				<img class="vs_pic" src="__PUBLIC__/bg/imgs/vs.png" alt="">
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_ti">信千金</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_ti">其他平台</p>
					</div>
				</div>
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_title"><img src="__PUBLIC__/bg/imgs/zuanshi.png" />数据全面</p>
						<p class="contrast_des">数据覆盖90%的网贷机构</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_title1">数据单一</p>
						<p class="contrast_des1">数据来自1-2家机构</p>
					</div>
				</div>
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_title"><img src="__PUBLIC__/bg/imgs/zuanshi.png" />查询快速</p>
						<p class="contrast_des">报告实时生成5秒拿到结果</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_title1">报告速度慢</p>
						<p class="contrast_des1">24小时内方可查看</p>
					</div>
				</div>
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_title"><img src="__PUBLIC__/bg/imgs/zuanshi.png" />权威可靠</p>
						<p class="contrast_des">来自各大数据商运营商的精准数据</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_title1">权威数据</p>
						<p class="contrast_des1">数据不够精准</p>
					</div>
				</div>
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_title"><img src="__PUBLIC__/bg/imgs/zuanshi.png" />数据安全</p>
						<p class="contrast_des">数据提供银行级加密保护</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_title1">信息泄露风险</p>
						<p class="contrast_des1">没有安全保障</p>
					</div>
				</div>
				<div class="contrast_item clearfix">
					<div class="contrast_left">
						<p class="contrast_title"><img src="__PUBLIC__/bg/imgs/zuanshi.png" />维度多样</p>
						<p class="contrast_des">30+维度在线查看</p>
					</div>
					<div class="contrast_right">
						<p class="contrast_title1">维度单一</p>
						<p class="contrast_des1"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	pushHistory();
	window.addEventListener("popstate", function(e) {
		$(".cover").show();
	}, false);
	function pushHistory() {
		var state = {
			title: "title",
			url: "#"
		};
		window.history.pushState(state, "title", "#");
	}
	$(".cover_bot .give_up").click(function(){
		$(".cover").hide();
	})

	$(".cover_bot .continue").click(function(){
		$(".cover").hide();
	})

	$(".pay_btn").on('click',function (){
		var btn = document.getElementById('btn');
		var username =$("#username").val();
		var sid = $("#sid").val();
		var price = $("#price").val();
		var password = $("#password").val();
		var mobile = $("#mobile").val();
		var idcard = $("#idcard").val();
		var code = $("#code").val();
		var pid = $("#pid").val();
		var radio = $('input[name="radio"]:checked').val();


		if($('#insurance').is(':checked')) {
			var insurance = $('#insurance').val();
		}else{
			var insurance = 0;
		}


		if(username == ''){
			layer.msg('姓名不能为空');
			return false;
		}
		if(!/^[\u4e00-\u9fa5]*$/.test(username)){
			layer.msg('姓名请填写正确');
			return false;
		}
		if(idcard == ''){
			layer.msg('身份证不能为空');
			return false;
		}
		if(idcard.length == 18){
			if(!/^[0-9A-Z]*$/.test(idcard)){
				layer.msg('身份证X请大写,不能留有空格');
				return false;
			}
		}else{
			layer.msg('身份证请填写正确');
			return false;
		}
		if(mobile == ''){
			layer.msg('手机号码不能为空');
			return false;
		}
		if(mobile.length !== 11){
			layer.msg("手机号码格式不正确！");
			return false;
		}
		if(!/^[0-9]*$/.test(mobile)){
			layer.msg("手机号码格式不正确！");
			return false;
		}
		if(radio==null || radio==undefined || radio==""){
			layer.msg('请确认查询协议');
			return false;
		}
		if(password == ''){
			layer.msg('密码不能为空');
			return false;
		}
		if(code == ''){
			layer.msg('验证码不能为空');
			return false;
		}
		var loads = layer.load();
		$.ajax({
			url:"<?php echo url('api/curl/idcard'); ?>",
			type:"post",
			datatype:'json',
			data:{'idcard':idcard},

			success:function(data)
			{
				layer.close(loads);
				if(data == 1){
					$.ajax({
						url:"<?php echo url('api/chaxun/zhucechaxun'); ?>",
						type:"post",
						datatype:'json',
						data:{'username':username,'mobile':mobile,'idcard':idcard,'password':password,'code':code,'pid':pid},
						success:function(data){
							if(data == 0){
								layer.msg("请确认信息是否正确");
							}else if(data == 11){
								layer.msg("手机号已达每日上限，请稍后重试");
							}else if(data == 12){
								layer.msg("身份证号已达每日上限，请稍后重试");
							}else{
								window.location.href='<?php echo url("index/pay/pay"); ?>?price='+price+'&pid='+sid+'&uid='+data+'&insurance='+insurance;
							}
						}
					});
				}else{
					layer.msg("身份证请填写正确");
				}
			}
		});

	});

	function jilu(jl=1){
		window.location.href="<?php echo url('index/login/loginss'); ?>?p_id=<?php echo $sid; ?>";
	}

	$('#sub').on('click',function(){
		layer.msg('请查询后，在报告内评价');
	})

	/* $(".demo1").bootstrapNews({
		newsPerPage: 3,
		autoplay: true,
		pauseOnHover: true,
		navigation:false,
		direction: 'up',
		newsTickerInterval: 4000,
		onToDo: function () {
		}
	}); */
</script>


</body>
</html>