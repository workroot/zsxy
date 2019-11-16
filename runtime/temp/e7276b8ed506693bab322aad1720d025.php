<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"./themes/default/complaint/bs.html";i:1571815559;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>投诉</title>
    <link href="/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/public/bootstrap/css/base.css" rel="stylesheet" type="text/css" />
    <script src="/public/bootstrap/js/jquery-2.2.3.min.js"></script>
    <script src="/public/bootstrap/js/bootstrap.js"></script>
    <script type='text/javascript'src='https://webchat.7moor.com/javascripts/7moorInit.js?accessId=f50ea5f0-5c14-11e9-8670-5bf8fe2cdd9c&autoShow=false&language=ZHCN' async='async'></script>
</head>
<style>

    .container{
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }

    .turn-pic a{
        color:#000000;
        text-decoration:none;
    }
    .turn-pic li {
        list-style:none;
        margin-left: 21px;
        border-bottom: 1px solid #e5e5e5;
        font-size: 17px;
        line-height: 43px;
    }

    .turn-pic li span{
        float: right;
        margin-right: 25px;
        color: #c9c9cb;
    }


    .turn{

    }
</style>

<body style="">
<div class="container" style="background-color:#fff;">
    <div style="background-color:#f2f2f2;">
        <p style="margin-left: 20px;color: #b2b2b2;font-size: 14px;letter-spacing: 1px;line-height: 38px;">请选择投诉原因</p>
    </div>
    <div  style="">
        <div id="turn" class="turn">
            <ul class="turn-pic">
                <li class="tou" data-type="20">政治类不实信息</li>
                <li class="tou" data-type="21">医疗健康类不实信息</li>
                <li style="border-bottom:0px solid #f2f2f2;" data-type="22">社会事件类不实信息</li>
                <p style="background-color: #f2f2f2; color: #969696;padding: 10px 21px;letter-spacing: 1px;line-height: 24px;">个人/企业等民事主体被诽谤侮辱、人身权或知识产权等被侵犯请选择“侵权”投诉。</p>
                <li class="tou" style="border-bottom:0px solid #f2f2f2;" data-type="23">侵权(冒充他人、侵犯名誉等)</li>
              
                <input type="hidden" name="father" value="<?php echo $type; ?>">
            </ul>
        </div>
    </div>

</div>
  <div style="background-color:#f2f2f2;width:100%;height:350px">

                </div>
</body>
</html>


<script>
    $(document).ready(function(){
        $('.tou').on('click',function(){
            var datatype = $(this).attr('data-type');
            var father = $('input:hidden[name="father"]').val();
            window.location.href = "<?php echo url('index/complaint/tousu'); ?>"+ '?type=' + datatype + '&father='+ father;
        })
    })
</script>

