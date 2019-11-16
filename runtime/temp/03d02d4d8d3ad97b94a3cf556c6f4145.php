<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./themes/dailishang/login/index.html";i:1571910173;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>信千金代理商后台管理</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="__JS__/layui/css/layui.css">
    <link rel="stylesheet" href="__CSS__/admin.css">
    <!--[if lt IE 9]>
    <script src="__JS__/html5shiv.min.js"></script>
    <script src="__JS__/respond.min.js"></script>
    <style>
        .login .login-form input {color: #000;}
    </style>
    <![endif]-->
</head>
<body class="login">

<div class="login-title">
<img style="width:131px;" src="../../../public/static/images/logo_w.png" /></br></br>
信千金代理商登陆
</div>
<form class="layui-form login-form" style="color:#FFF" action="<?php echo url('dailishang/login/login'); ?>" method="post">
    <div class="layui-form-item">
		
        <label class="layui-form-label">手机号</label>
        <div class="layui-input-block">
            <input type="text" name="tel" required lay-verify="required" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" name="password" required lay-verify="required" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="*">登 录</button>
        </div>
    </div>
</form>
<script>
    // 定义全局JS变量
    var GV = {
        current_controller: "dailishang/<?php echo (isset($controller) && ($controller !== '')?$controller:''); ?>/"
    };
</script>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/layui/lay/dest/layui.all.js"></script>
<script src="__JS__/admin.js"></script>
</body>
</html>