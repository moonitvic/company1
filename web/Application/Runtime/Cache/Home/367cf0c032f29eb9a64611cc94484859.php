<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>会员注册</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        ul,li{
            list-style: none;
        }
        body,div,h1,h2,h3,h4,p,ol,ul,li{
            margin:0;
            padding:0;
            border:0;
            text-shadow:0 0 0 #fff;
            -webkit-tap-highlight-color:rgba(0,0,0,0);
        }
        @-webkit-viewport{
            width:device-width;
        }
        @-moz-viewport{
            width:device-width;
        }
        @-ms-viewport{
            width:device-width;
        }
        @-o-viewport{
            width:device-width;
        }
        @viewport{
            width:device-width;
        }
        html,body{
            min-height:100%;
            font-size:1em;
        }
        body{
            min-width:320px;
            max-width:768px;
            -webkit-font-smoothing:antialiased;
            -webkit-text-size-adjust:100%;
            -ms-text-size-adjust:100%;
            text-size-adjust:100%;
            color:#000;
            font-family:arial;
            margin:0 auto;
        }
        ul{
            list-style-type:none;
        }
        a:link,a:visited,a:hover,a:active{
            text-decoration:none;
        }

        #layout{
            padding-top: 0;
            max-width: 768px;
            margin: 0 auto;
            min-width: 320px;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
            min-height: 480px;
        }
        #layout h2{
            font-size: 1.5em;
            color: #000;
            font-family: "Microsoft YaHei", "Arial";
            height: 80px;
            line-height: 80px;
            text-align: center;
            position: relative;
        }
        #layout ul li{
            line-height: 60px;
            margin-left: 11%;
            position: relative;
        }
        #layout ul li span{
            color: #000;
            margin-right: 5%;
        }
        .gender1 i{
            font-style: normal;
            margin-right: 5%;
        }
        .username,.phone,.position,.company,.intention{
            width: 70%;
            height: 30px;
            border-radius: 4px;
            opacity: .7;
            filter: alpha(opacity:70);
            margin: 5px 0;
            border: 1px solid #ccc;
        }
        .submit{
            width: 50%;
            height: 35px;
            margin: 20px 0 0 20%;
            background-color: #006699;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<script type="text/javascript" src="/Public/js/register_weixin.js"></script>
<body>
<div id="layout">
    <h2>会员注册</h2>
    <form action="<?php echo U('Weixin/register_add');?>" method="post">
        <?php
 if (isset($_GET['link'])) {?>
        <input type="hidden" name="link" value="<?php echo $_GET['link'] ?>">

        <?php }else{ ?>
        <input type="hidden" name="link" value="">
        <?php } ?>
        <ul>
            <li>
                <span>姓名</span>
                <input type="text" placeholder="请输入姓名" class="username" name="username" value=""  style="border: 2px solid #9891F0"/>
            </li>
            <li>
                <span>电话</span>
                <input type="text" placeholder="请输入电话" class="phone" name="phone" value="" style="border: 2px solid #9891F0"/>
            </li>
            <li>
                <span>密码</span>
                <input type="password" placeholder="请输入密码" class="phone" name="password" value="" style="border: 2px solid #9891F0"/>
            </li>
            <li>
                <span>确认</span>
                <input type="password" placeholder="请再次输入密码" class="phone" name="notpassword" value="" style="border: 2px solid #9891F0"/>
            </li>

            <li class="gender1">
                <span>性别</span>
                <input type="radio" name="sex" value="男" checked="checked" class="gender"/><i>男</i>
                <input type="radio" name="sex" value="女" class="gender"/><i>女</i>
            </li>
            <li>
                <span>公司</span>
                <input type="text" placeholder="请输入您的公司名" class="company" name="company" value="" style="border: 2px solid #9891F0"/>
            </li>
            <li>
                <span>职位</span>
                <input type="text" placeholder="请输入您的职位" class="position" name="job" value="" style="border: 2px solid #9891F0"/>
            </li>
            <li>
                <span>意向</span>
                <select name="yixang" id="intention" class="intention" style="width: 100px;height: 40px;border: 2px solid #9891F0">
                    <option value="">请选择</option>
                    <option value="求职招聘">求职招聘</option>
                    <option value="交友婚恋">交友婚恋</option>
                    <option value="产品代销">产品代销</option>
                    <option value="项目对接">项目对接</option>
                    <option value="社交聚会">社交聚会</option>
                </select>
            </li>
            <!--  <input class="submit" type="submit" value="提交" style="text-align: center;margin-bottom: 50px" /> -->
            <li>
                <input class="submit" type="submit" value="提交"  />
            </li>
        </ul>
    </form>
</div>
</body>
</html>