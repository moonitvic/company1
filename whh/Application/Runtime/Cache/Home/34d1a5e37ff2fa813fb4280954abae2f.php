<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/css/commonHeader.css"/>
    <link rel="stylesheet" href="/Public/css/investorList.css"/>
</head>
<body>
<div class="header clearfix">
    <a href="javascript:history.go(-1)" class="header-left"></a>
    <a href="javascript:;" class="header-right"></a>
    <p class="title-bar-text">智能撮合</p>
</div>
<div class="nav">
    <div class="nav-item">
        <a href="javascript:;">项目库</a>
        <ul>
            <li><a href="<?php echo U('Project/projectList',array('token'=>$_GET['token']));?>">项目库</a></li>
            <li><a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>">产品库</a></li>
        </ul>
        <i></i>
    </div>
    <div class="nav-item nav-item-cur">
        <a href="<?php echo U('Invest/investList',array('token'=>$_GET['token']));?>">投资人</a>
    </div>
    <div class="nav-item">
        <a href="<?php echo U('Userindex/userCenter',array('token'=>$_GET['token']));?>">我的信息</a>
    </div>
</div>

<section>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list-item">
        <a href="<?php echo U('Invest/investDetail',array('token'=>$_GET['token'],'inv_id'=>$list['inv_id']));?>"></a>
        <div class="list-item-left">
            <?php if($list['inv_logo']): ?><img src="/admin/<?php echo ($list["inv_logo"]); ?>" alt=""/>
            <?php else: ?>
                <img src="/Public/images/investorList-item-default.png" alt=""/><?php endif; ?>
        </div>
        <div class="list-item-right">
            <h3><?php echo ($list["inv_name"]); ?></h3>
            <p><?php echo ($list["inv_in_company"]); ?></p>
            <p><?php echo ($list["inv_type"]); ?></p>
        </div>
    </div><?php endforeach; endif; ?>
    <div class="main-heart-fenye">
        <?php echo ($page); ?>
    </div>
    <style type="text/css">
        .main-heart-fenye{
            text-align: center;
        }
        .main-heart-fenye a{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding:0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
        }
        .main-heart-fenye .current{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding: 0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
            color: #fff;
            background: #999;
        }

    </style>
</section>

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".nav-item:first-child").click(function(){
            var oUl = $(".nav-item ul");
            if(oUl.css("display") === "none"){
                oUl.css("display","block");
                $(".nav-item i").addClass("cur");
                return false;
            }

        });

        $("body").click(function(){
            $(".nav-item ul").css("display","none");
            $(".nav-item i").removeClass("cur");
        });


        $(".nav-item").click(function(){
            $(this).addClass("nav-item-cur").siblings().removeClass("nav-item-cur");

        })
    })
</script>
</body>
</html>