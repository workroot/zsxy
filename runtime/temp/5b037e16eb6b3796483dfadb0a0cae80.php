<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./themes/calculator/pay/problem.html";i:1571815575;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>问题解答</title>
    <link rel="stylesheet" href="__PUBLICS__/calculator/css/style.css">
    <link rel="stylesheet" href="__PUBLICS__/calculator/css/index.css">
</head>
<body>
<div class="container">
    <div class="answer_box">
        <p class="answer_ti">1.<?php echo $data['title']; ?></p>
        <div class="answer_cen">
            <img class="cen_pic" src="__PUBLICS__/calculator/img/5.2.png" alt="">
            <div class="cen_right">
                <span></span>
                <p>专业律师团队<br/>为您解答</p>
            </div>
        </div>
        <div class="answer_txt">
            <p>首先，法律规定：</p>
            <p><?php echo $data['content']; ?></p>
        </div>
    </div>

</div>
</body>
</html>
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="/public/layer/layer.js"></script>