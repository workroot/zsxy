<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./themes/default/index/mingxiss.html";i:1571999345;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>提现记录</title>
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/withdrawal_record.css">
      <link rel="stylesheet" href="__PUBLIC__/css/mui.min.css">
        <script src="__PUBLIC__/js/jquery.min.js"></script>
    <script src="__PUBLIC__/js/mui.min.js"></script>
</head>
<body>
	<style>
		.mui-content-padded{
        margin: 0px;
    }
	</style>
<div class="container">
    <p class="my_order">最新提现记录</p>
    <span style="text-align: center;position: absolute;width: 100%;font-size: 0.5rem;">已提现：<?php if(!empty($alltxNum)): ?><?php echo $alltxNum; else: ?>0<?php endif; ?>元</span>
    <div class="mui-content mui-scroll-wrapper order_box" style="margin-top: 25%;padding-top:0px;height:1000px;"
         id="pullrefresh">
        <div style="padding:0;margin:0;background-color: #efeff4;">
            <div class="mui-content-padded" style="background-color: #efeff4;">
                <div class="mui-input-row mui-search input-search" style="width:100%;background-color: #efeff4;">
                </div>
            </div>


            <ul id="lis" class="mui-table-view mui-table-view-chevron" style="background-color: #efeff4;">

            </ul>

        </div>
    </div>
</div>

<script>
    page = 0;
    limit = 10;
    mui.init({
        pullRefresh: {
            container: "#pullrefresh",//待刷新区域标识，querySelector能定位的css选择器均可，比如：id、.class等
            up: {
                auto:true,
                contentrefresh: "正在加载...",//可选，正在加载状态时，上拉加载控件上显示的标题内容
                contentnomore: '没有更多数据了',//可选，请求完毕若没有更多数据时显示的提醒内容；
                callback: pullupRefresh //必选，刷新函数，根据具体业务来编写，比如通过ajax从服务器获取新数据；
            }
        }
    });
    function pullupRefresh() {
        setTimeout(function () {
            page++;
            data();
        }, 500);
    };
    mui('body').on('tap', 'a', function () {
        window.top.location.href = this.href;
    });

    var lis = document.getElementById("lis");
    function data() {
        $.ajax({
            url:"<?php echo url('/index/index/mixglist'); ?>",
            type:'post',
            data:{"page":page,"limit":limit},
            success: function (data) {
                if (data.length < limit) {
                    mui('#pullrefresh').pullRefresh().endPullupToRefresh(true);
                } else {
                    mui('#pullrefresh').pullRefresh().endPullupToRefresh(false);
                }
                for (var a in data) {
                    //var url = '<?php echo url("index/login/view"); ?>?dingdanids=' + data[a].id ;
                     var index = '<li><div class="order_list">\n' +
        						 '     <p>金额：'+ data[a].money + '元<span class="fail">'+ data[a].types +'</span></p>\n' +
        						 '     <p>账号：'+ data[a].zhanghao +'</p>\n' +
        						 '     <p>类型：'+ data[a].type +'</p>\n' +
        						 '     <p class="order_time">下单时间：'+ data[a].create_times +'</p>\n' +
        						 '</div></li>';
                    lis.innerHTML += index;
                }
            }
        });
    }
    window.addEventListener('toggle', function (event) {
        if (event.target.id === 'M_Toggle') {
            var isActive = event.detail.isActive;
            var table = document.querySelector('.mui-table-view');
            var card = document.querySelector('.mui-card');
            if (isActive) {
                card.appendChild(table);
                card.style.display = '';
            } else {
                var content = document.querySelector('.mui-content');
                content.insertBefore(table, card);
                card.style.display = 'none';
            }
        }
    });
</script>

</body>
</html>