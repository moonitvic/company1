<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">

    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/commonHeader.css">
    <link rel="stylesheet" href="/Public/css/concern.css">

</head>
<body class="bg-gray">

<div class="header clearfix">
    <a href="<?php echo U('userCenter',array('token'=>$_GET['token']));?>" class="header-left"></a>
    <p class="title-bar-text">收藏</p>
    <a href="<?php echo U('Project/projectlist',array('token'=>$_GET['token']));?>" class="header-right"></a>
</div>
<header class="select-header">
    <a href="<?php echo U('collectProject',array('token'=>$_GET['token']));?>" class="select-header-a">项目库</a>
    <a href="<?php echo U('collectProduct',array('token'=>$_GET['token']));?>" class="select-header-a">产品库</a>
    <a href="javascript:;" class="select-header-a active">投资人</a>
</header>
<section>
    <?php if(is_array($data)): foreach($data as $key=>$data): if($data['inv_status'] == 1): ?><a href="<?php echo U('Invest/investDetail',array('token'=>$_GET['token'],'inv_id'=>$data['inv_id']));?>">
                <div class="concern-list-items height-120">
                    <img class="concern-list-items-left-i" src="/admin/<?php echo ($data["inv_logo"]); ?>" alt="">
                    <div class="concern-list-items-right">
                        <h5><?php echo ($data["inv_name"]); ?></h5>
                        <p><?php echo ($data["inv_in_company"]); ?></p>
                        <p><?php echo ($data["inv_type"]); ?></p>
                    </div>
                </div>
            </a>
        <?php else: ?>
            <a href="javascript:;">
                <div class="concern-list-items height-120">
                    <img class="concern-list-items-left-i" src="/admin/<?php echo ($data["inv_logo"]); ?>" alt="">
                    <div class="concern-list-items-right">
                        <h5><?php echo ($data["inv_name"]); ?></h5>
                        <p><?php echo ($data["inv_in_company"]); ?></p>
                        <p><?php echo ($data["inv_type"]); ?></p>
                        <p style="color:#f23030;">已下架</p>
                    </div>
                </div>
            </a><?php endif; endforeach; endif; ?>
</section>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>