<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingSearch.css"/>
    <link rel="stylesheet" href="/Public/css/postlist.css"/>

</head>
<body>



<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="<?php echo U('Index/index');?>"><img src="/Public/images/logo.png" alt=""/></a>
            </div>
            <ul>
                <!-- <li><a href="index.php" target="_self">首页</a></li> -->
                <li><a href="<?php echo U('Freemarket/freeMarket');?>">自由市场</a></li>
                <li><a href="<?php echo U('Rongzi/financeproducts');?>">智能投顾</a></li>
                <li><a href="<?php echo U('Daikuan/personalloan');?>">智能信贷</a></li>
                <li><a href="<?php echo U('Dating/datingindex');?>">相亲交友</a></li>
                <li>
                    <a href="javascript:;">关于我们</a>
                    <ol>
                        <li><a href="<?php echo U('Static/aboutUs');?>">公司简介</a></li>
                        <li><a href="<?php echo U('Static/contactUs');?>">联系我们</a></li>
                        <li><a href="<?php echo U('Static/adService');?>">主营业务</a></li>
                        <li><a href="<?php echo U('Static/joinUs');?>">加入我们</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="head-right right">
            <ol>
                <!-- <li class="search"><a href="javascript:void(0)"><i></i>搜索</a></li>-->
                <?php
 if(cookie('think_user_name')) {?>
                <li class="login"><a href="###"><i></i><?php echo cookie('think_user_name'); ?></a></li>
                <li class="login"><a href="<?php echo U('User/logout'); ?>"><i></i>退出</a></li>
                <?php }else{ ?>

                <li class="login login2"><a href="<?php echo U('User/login'); ?>"><i></i>登录</a></li>
                <li class="register login2"><a href="<?php echo U('User/register'); ?>"><i></i>注册</a></li>
                <?php
 }?>
            </ol>
        </div>
    </div>
</div>
<script type="text/javascript">
    function jiaoyou(){
        alert("相亲交友模块暂时未融到框架里");
    }
    function zhaopin(){
        alert("招聘模块暂时未融到框架里");
    }
</script>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/19027900.js"></script>
<noscript><a href="http://www.51.la/?19027900" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/19027900.asp" style="border:none" /></a></noscript>


<!--nav1开始-->
<div class="nav1">
    <div class="container">
        <ul class="clearfix">
            <li><a href="<?php echo U('Dating/datingindex');?>">相亲首页</a></li>
            <li><a href="<?php echo U('Dating/datingexpand');?>">个人中心</a></li>
            <li class="cur"><a href="<?php echo U('Dating/datingsearch');?>">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li><a href="<?php echo U('Dating/datingcase');?>">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="condition">
    <div class="container">
        <div class="condition-box">
            <form action="<?php echo U('Dating/datingsearch');?>" method="post" id="myform">
                <div class="filter-conditions clearfix">
                    <div class="selected-conditions left">已选条件:</div>
                    <div class="selected-wrap left clearfix">
                        <div class="selected-wrap-in left clearfix">
                            <!--性别-->
                            <div class="selected-item selected-one">
                                <a href="javascript:;" class="selected-main-txt">
                                    <em data-default=""><?php echo ($data['person']); ?></em><i></i>
                                </a>
                                <dl class="selected-item-con">
                                    <dt>请选择性别:</dt>
                                    <dd>
                                        <select name="sex" id="gender">
                                            <option value="<?php echo ($data['num']); ?>"><?php echo ($data['person']); ?></option>
                                            <option value="-1">不限</option>
                                            <option value="1">男士</option>
                                            <option value="0">女士</option>
                                        </select>
                                    </dd>
                                </dl>
                            </div>
                            <!--年龄-->
                            <div class="selected-item selected-two">
                                <a href="javascript:;" class="selected-main-txt">
                                    <em data-suffix="岁" data-default="年龄">年龄</em><i></i>
                                </a>
                                <dl class="selected-item-con">
                                    <dt>请选择年龄:</dt>
                                    <dd>
                                        <div id="j-age1" class="selectBox">
                                            <select name="ageBegin" class="ageBegin" id="ageBegin">
                                                <?php
 if (isset($_GET['ageBegin'])) { echo '<option value="'.$_GET['ageBegin'].'">'.$_GET['ageBegin'].'</option>'; } ?>
                                                <option value="-1">不限</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                        <span>-</span>
                                        <div id="j-age2" class="selectBox">
                                            <select name="ageEnd" class="ageEnd" id="ageEnd">
                                                <?php
 if (isset($_GET['ageEnd'])) { echo '<option value="'.$_GET['ageEnd'].'">'.$_GET['ageEnd'].'</option>'; } ?>
                                                <option value="300">不限</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                                <option value="51">51</option>
                                                <option value="52">52</option>
                                                <option value="53">53</option>
                                                <option value="54">54</option>
                                                <option value="55">55</option>
                                                <option value="56">56</option>
                                                <option value="57">57</option>
                                                <option value="58">58</option>
                                                <option value="59">59</option>
                                                <option value="60">60</option>
                                                <option value="61">61</option>
                                                <option value="62">62</option>
                                                <option value="63">63</option>
                                                <option value="64">64</option>
                                                <option value="65">65</option>
                                                <option value="66">66</option>
                                                <option value="67">67</option>
                                                <option value="68">68</option>
                                                <option value="69">69</option>
                                                <option value="70">70</option>
                                                <option value="71">71</option>
                                                <option value="72">72</option>
                                                <option value="73">73</option>
                                                <option value="74">74</option>
                                                <option value="75">75</option>
                                                <option value="76">76</option>
                                                <option value="77">77</option>
                                                <option value="78">78</option>
                                                <option value="79">79</option>
                                                <option value="80">80</option>
                                            </select>
                                        </div>
                                        <a href="javascript:;" class="btn-gray">确定</a>
                                    </dd>
                                </dl>
                            </div>
                            <!--地区-->
                            <div class="selected-item selected-one">
                                <a href="javascript:;" class="selected-main-txt">
                                    <em>地区</em><i></i>
                                </a>
                                <dl class="selected-item-con">
                                    <dt>请选择地区:</dt>
                                    <dd>
                                        <select name="area" id="area">
                                            <?php
 if (isset($_GET['area'])) { echo '<option value="'.$_GET['area'].'">'.$_GET['area'].'</option>'; } ?>
                                            <option value="">不限</option>
                                            <option value="北京">北京</option>
                                            <option value="上海">上海</option>
                                            <option value="广州">广州</option>
                                            <option value="深圳">深圳</option>
                                            <option value="南京">南京</option>
                                        </select>
                                    </dd>
                                </dl>
                            </div>
                            <!--学历-->
                            <div class="selected-item selected-three">
                                <a href="javascript:;" class="selected-main-txt">
                                    <em data-default="学历">学历</em><i></i>
                                </a>
                                <dl class="selected-item-con">
                                    <dt>请选择学历:</dt>
                                    <dd>
                                        <label><input type="checkbox" name="edu_no" checked="checked" value="不限"/>不限</label>
                                        <label><input type="checkbox" name="edu[]"  value="大专"/>大专</label>
                                        <label><input type="checkbox" name="edu[]"  value="本科"/>本科</label>
                                        <label><input type="checkbox" name="edu[]"  value="研究生"/>硕士</label>
                                        <label><input type="checkbox" name="edu[]"  value="博士"/>博士</label>
                                        <label><input type="checkbox" name="edu[]"  value="其他"/>其他</label>
                                        <input type="hidden" name="" value="">
                                        <a href="javascript:;" class="btn-gray">确定</a>
                                    </dd>
                                </dl>
                            </div>
                            <!--月收入-->
                            <div class="selected-item selected-one">
                                <a href="javascript:;" class="selected-main-txt">
                                    <?php
 if (isset($_GET['salary'])) { echo '<em data-default="'.$_GET['salary'].'">'.$_GET['salary'].'</em><i></i>'; }else{ echo '<em data-default="月收入">月收入</em><i></i>'; } ?>

                                </a>
                                <dl class="selected-item-con">
                                    <dt>请选择月收入:</dt>
                                    <dd>
                                        <select name="salary" id="salary">
                                            <?php
 if (isset($_GET['salary'])) { echo '<option data-value="'.$_GET['salary'].'">'.$_GET['salary'].'</option>'; } ?>
                                            <option data-value="不限">不限</option>
                                            <option data-value="2000元以下">2000元以下</option>
                                            <option data-value="2000-5000元">2000-5000元</option>
                                            <option data-value="5000-10000元">5000-10000元</option>
                                            <option data-value="10000-15000元">10000-15000元</option>
                                            <option data-value="15000-20000元">15000-20000元</option>
                                            <option data-value="20000-25000元">20000-25000元</option>
                                            <option data-value="25000元以上">25000元以上</option>
                                        </select>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <!--<span class="more-txt left">展开更多条件<i></i></span>-->
                    </div>
                    <div class="selected-byId right">
                        <!-- <input type="text" id="account" name="info" placeholder="ID昵称搜索"/>
                        <a href="javascript:;" id="newIdSearch" class="btn-search-id"><i id="searcha"></i></a> -->
                        <!--<a href="datingInformation.php">免费发布信息</a>-->
                        <input type="submit" value="搜索" class="selected-byId">
                    </div>
                </div>

                <div class="more-conditions clearfix" style="display: block;">
                    <div class="selected-wrap">
                        <div class="selected-item selected-three">
                            <a href="javascript:;" class="selected-main-txt">
                                <em data-default="婚史">婚史</em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择婚史:</dt>
                                <dd>
                                    <label><input checked="checked" type="checkbox" name="marry_no" value="不限"/>不限</label>
                                    <label><input type="checkbox" name="marry[]" value="未婚"/>未婚</label>
                                    <label><input type="checkbox" name="marry[]" value="离异"/>离异</label>
                                    <label><input type="checkbox" name="marry[]" value="丧偶"/>丧偶</label>
                                    <a href="javascript:;" class="btn-gray">确定</a>
                                </dd>
                            </dl>
                        </div>
                        <!--身高-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <em data-default="身高">身高</em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择身高:</dt>
                                <dd>
                                    <select name="height" id="height">
                                        <option value="0">不限</option>
                                        <option value="150以下">150以下</option>
                                        <option value="150-155">150-155</option>
                                        <option value="155-165">155-165</option>
                                        <option value="165-175">165-175</option>
                                        <option value="175-185">175-185</option>
                                        <option value="185-190">185-190</option>
                                        <option value="190以上">190以上</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--职业-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['position'])) { $_GET['position']=''; } if ($_GET['position']=='') { $_GET['positions']='职业'; }else{ $_GET['positions']=$_GET['position']; } ?>
                                <em data-default="职业"><?php echo $_GET['positions'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择职业:</dt>
                                <dd>
                                    <select name="position" id="position">
                                        <?php
 if (isset($_GET['position'])) { echo '<option value="'.$_GET['position'].'">'.$_GET['positions'].'</option>'; } ?>
                                        <option value="0">不限</option>
                                        <option value="销售">销售</option>
                                        <option value="客户服务">客户服务</option>
                                        <option value="计算机/互联网">计算机/互联网</option>
                                        <option value="通信/电子">通信/电子</option>
                                        <option value="生产/制造">生产/制造</option>
                                        <option value="物流/仓储">物流/仓储</option>
                                        <option value="商贸/采购">商贸/采购</option>
                                        <option value="人事/行政">人事/行政</option>
                                        <option value="高级管理">高级管理</option>
                                        <option value="广告/市场">广告/市场</option>
                                        <option value="传媒/艺术">传媒/艺术</option>
                                        <option value="生物/制药">生物/制药</option>
                                        <option value="医疗/护理">医疗/护理</option>
                                        <option value="金融/银行/保险">金融/银行/保险</option>
                                        <option value="建筑/房地产">建筑/房地产</option>
                                        <option value="咨询/顾问">咨询/顾问</option>
                                        <option value="法律">法律</option>
                                        <option value="财会/审计">财会/审计</option>
                                        <option value="教育/科研">教育/科研</option>
                                        <option value="服务业">服务业</option>
                                        <option value="交通运输">交通运输</option>
                                        <option value="政府机构">政府机构</option>
                                        <option value="军人/警察">军人/警察</option>
                                        <option value="农林牧渔">农林牧渔</option>
                                        <option value="自由职业">自由职业</option>
                                        <option value="在校学生">在校学生</option>
                                        <option value="待业">待业</option>
                                        <option value="其他行业">其他行业</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--住房-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['house'])) { $_GET['house']=''; } if ($_GET['house']=='') { $_GET['houses']='住房'; }else{ $_GET['houses']=$_GET['house']; } ?>
                                <em data-default="住房"><?php echo $_GET['houses'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择住房:</dt>
                                <dd>
                                    <select name="house" id="house">
                                        <?php
 if (isset($_GET['house'])) { echo '<option value="'.$_GET['house'].'">'.$_GET['houses'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="有房(有房贷)">有房(有房贷)</option>
                                        <option value="有房(没房贷)">有房(无房贷)</option>
                                        <option value="无房">无房</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--有无小孩-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['children'])) { $_GET['children']=''; } if ($_GET['children']=='') { $_GET['childrens']='有无小孩'; }else{ $_GET['childrens']=$_GET['children']; } ?>
                                <em data-default="有无小孩"><?php echo $_GET['childrens'] ?></em>
                                <i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择有无小孩:</dt>
                                <dd>
                                    <select name="children" id="children">
                                        <?php
 if (isset($_GET['children'])) { echo '<option value="'.$_GET['children'].'">'.$_GET['childrens'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="有子女">有子女</option>
                                        <option value="无子女">无子女</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--籍贯-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['city'])) { $_GET['city']=''; } if ($_GET['city']=='') { $_GET['citys']='籍贯'; }else{ $_GET['citys']=$_GET['city']; } ?>
                                <em data-default="籍贯"><?php echo $_GET['citys'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择籍贯:</dt>
                                <dd>
                                    <select name="city" id="city">
                                        <?php
 if (isset($_GET['city'])) { echo '<option value="'.$_GET['city'].'">'.$_GET['citys'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="北京">北京</option>
                                        <option value="上海">上海</option>
                                        <option value="广州">广州</option>
                                        <option value="深圳">深圳</option>
                                        <option value="重庆">重庆</option>
                                        <option value="天津">天津</option>
                                        <option value="广州">广州</option>
                                        <option value="江苏">江苏</option>
                                        <option value="浙江">浙江</option>
                                        <option value="四川">四川</option>
                                        <option value="福建">福建</option>
                                        <option value="山东">山东</option>
                                        <option value="湖北">湖北</option>
                                        <option value="河北">河北</option>
                                        <option value="山西">山西</option>
                                        <option value="内蒙古">内蒙古</option>
                                        <option value="辽宁">辽宁</option>
                                        <option value="黑龙江">黑龙江</option>
                                        <option value="安徽">安徽</option>
                                        <option value="江西">江西</option>
                                        <option value="河南">河南</option>
                                        <option value="湖南">湖南</option>
                                        <option value="广西">广西</option>
                                        <option value="海南">海南</option>
                                        <option value="贵州">贵州</option>
                                        <option value="云南">云南</option>
                                        <option value="西藏">西藏</option>
                                        <option value="陕西">陕西</option>
                                        <option value="甘肃">甘肃</option>
                                        <option value="青海">青海</option>
                                        <option value="宁夏">宁夏</option>
                                        <option value="新疆">新疆</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['constellation'])) { $_GET['constellation']=''; } if ($_GET['constellation']=='') { $_GET['constellations']='星座'; }else{ $_GET['constellations']=$_GET['constellation']; } ?>
                                <em data-default="星座"><?php echo $_GET['constellations'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择星座:</dt>
                                <dd>
                                    <select name="constellation" id="constellation">
                                        <?php
 if (isset($_GET['constellation'])) { echo '<option value="'.$_GET['constellation'].'">'.$_GET['constellations'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="白羊座">白羊座(03.21-04.20)</option>
                                        <option value="金牛座">金牛座(04.21-05.20)</option>
                                        <option value="双子座">双子座(05.21-06.21)</option>
                                        <option value="巨蟹座">巨蟹座(06.22-07.22)</option>
                                        <option value="狮子座">狮子座(07.23-08.22)</option>
                                        <option value="处女座">处女座(08.23-09.22)</option>
                                        <option value="天秤座">天秤座(09.23-10.22)</option>
                                        <option value="天蝎座">天蝎座(10.23-11.21)</option>
                                        <option value="射手座">射手座(11.22-12.21)</option>
                                        <option value="摩羯座">摩羯座(12.22-01.19)</option>
                                        <option value="水瓶座">水瓶座(01.20-02.19)</option>
                                        <option value="双鱼座">双鱼座(02.20-03.20)</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--生肖-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['zodiac'])) { $_GET['zodiac']=''; } if ($_GET['zodiac']=='') { $_GET['zodiacs']='生肖'; }else{ $_GET['zodiacs']=$_GET['zodiac']; } ?>
                                <em data-default="生肖"><?php echo $_GET['zodiacs'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择生肖:</dt>
                                <dd>
                                    <select name="tweleveanimals" id="zodiac">
                                        <?php
 if (isset($_GET['zodiac'])) { echo '<option value="'.$_GET['zodiac'].'">'.$_GET['zodiacs'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="鼠">鼠</option>
                                        <option value="牛">牛</option>
                                        <option value="虎">虎</option>
                                        <option value="兔">兔</option>
                                        <option value="龙">龙</option>
                                        <option value="蛇">蛇</option>
                                        <option value="马">马</option>
                                        <option value="羊">羊</option>
                                        <option value="猴">猴</option>
                                        <option value="鸡">鸡</option>
                                        <option value="狗">狗</option>
                                        <option value="猪">猪</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <!--民族-->
                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['national'])) { $_GET['national']=''; } if ($_GET['national']=='') { $_GET['nationals']='民族'; }else{ $_GET['nationals']=$_GET['national']; } ?>
                                <em data-default="民族"><?php echo $_GET['nationals'] ?></em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择民族:</dt>
                                <dd>
                                    <select name="nation" id="national">
                                        <?php
 if (isset($_GET['national'])) { echo '<option value="'.$_GET['national'].'">'.$_GET['nationals'].'</option>'; } ?>
                                        <option value="">不限</option>
                                        <option value="汉族">汉族</option>
                                        <option value="藏族">藏族</option>
                                        <option value="朝鲜族">朝鲜族</option>
                                        <option value="蒙古族">蒙古族</option>
                                        <option value="回族">回族</option>
                                        <option value="满族">满族</option>
                                        <option value="维吾尔族">维吾尔族</option>
                                        <option value="壮族">壮族</option>
                                        <option value="彝族">彝族</option>
                                        <option value="苗族">苗族</option>
                                        <option value="侗族">侗族</option>
                                        <option value="瑶族">瑶族</option>
                                        <option value="白族">白族</option>
                                        <option value="布依族">布依族</option>
                                        <option value="傣族">傣族</option>
                                        <option value="京族">京族</option>
                                        <option value="黎族">黎族</option>
                                        <option value="羌族">羌族</option>
                                        <option value="怒族">怒族</option>
                                        <option value="佤族">佤族</option>
                                        <option value="水族">水族</option>
                                        <option value="畲族">畲族</option>
                                        <option value="土族">土族</option>
                                        <option value="阿昌族">阿昌族</option>
                                        <option value="哈尼族">哈尼族</option>
                                        <option value="高山族">高山族</option>
                                        <option value="景颇族">景颇族</option>
                                        <option value="珞巴族">珞巴族</option>
                                        <option value="锡伯族">锡伯族</option>
                                        <option value="德昂族">德昂(崩龙)族</option>
                                        <option value="保安族">保安族</option>
                                        <option value="基诺族">基诺族</option>
                                        <option value="门巴族">门巴族</option>
                                        <option value="毛南族">毛南族</option>
                                        <option value="赫哲族">赫哲族</option>
                                        <option value="裕固族">裕固族</option>
                                        <option value="撒拉族">撒拉族</option>
                                        <option value="独龙族">独龙族</option>
                                        <option value="普米族">普米族</option>
                                        <option value="仫佬族">仫佬族</option>
                                        <option value="仡佬族">仡佬族</option>
                                        <option value="东乡族">东乡族</option>
                                        <option value="拉祜族">拉祜族</option>
                                        <option value="土家族">土家族</option>
                                        <option value="纳西族">纳西族</option>
                                        <option value="傈僳族">傈僳族</option>
                                        <option value="布朗族">布朗族</option>
                                        <option value="哈萨克族">哈萨克族</option>
                                        <option value="达斡尔族">达斡尔族</option>
                                        <option value="鄂伦春族">鄂伦春族</option>
                                        <option value="鄂温克族">鄂温克族</option>
                                        <option value="俄罗斯族">俄罗斯族</option>
                                        <option value="塔塔尔族">塔塔尔族</option>
                                        <option value="塔吉克族">塔吉克族</option>
                                        <option value="柯尔克孜族">柯尔克孜族</option>
                                        <option value="乌兹别克族">乌兹别克族</option>
                                        <option value="国外">国外</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>

                        <div class="selected-item selected-one">
                            <a href="javascript:;" class="selected-main-txt">
                                <?php
 if (!isset($_GET['level'])) { $_GET['level']='会员等级'; } if ($_GET['level']=='') { $_GET['levels']='会员等级'; }else{ $_GET['levels']=$_GET['level']; } ?>
                                <em data-default="会员等级">会员等级</em><i></i>
                            </a>
                            <dl class="selected-item-con">
                                <dt>请选择会员等级:</dt>
                                <dd>
                                    <select name="level" id="level">

                                        <option value="">不限</option>
                                        <option value="普通会员">普通会员</option>
                                        <option value="高级会员">高级会员</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="hot-tags clearfix" style="display: none;">
                    <label>热门标签:</label>
                    <!--<input type="hidden" name="tag" id="tag" value="<?php echo $tag ?>">-->
                    <!--<a href="javascript:;" class="btn-search" id="search">搜索</a>-->
                    <input type="submit" value="搜索">
                </div>
            </form>
        </div>

        <div class="list-outer">
            <div class="list-inner">
                <ul class="clearfix">
                    <?php if(is_array($list)): foreach($list as $key=>$list): ?><li>
                        <a href="<?php echo U('Dating/datingintroduce',array('id'=>$list[id]));?>">
                            <img src="<?php echo ($list["touxiang_src"]); ?>" width="200px" height="200px" alt=""/>
                            <h4><?php echo ($list["nickname"]); ?></h4>
                            <p><span><?php echo ($list["age"]); ?></span><span title="<?php echo ($list["workarea"]); ?>"><?php echo ($list["workarea"]); ?></span><span><?php echo ($list["maritalstatus"]); ?></span><span><?php echo ($list["height"]); ?></span></p>
                            <!--<p class="description" title="<?php echo ($list["soliloquy"]); ?>">内心独白：-->
                            <!--</p>-->
                        </a>
                    </li><?php endforeach; endif; ?>
                    <!-- <li>
                        <a href="javascript:;">
                            <img src="/Public/images/datingSearch-item01.jpg" alt=""/>
                            <h4>昵称</h4>
                            <p><span>年龄</span><span>现居住地</span><span>未婚</span><span>身高</span></p>
                            <p class="description">希望她温柔大方，孝顺，真诚，感情专一</p>
                        </a>
                    </li> -->
                </ul>
            </div>
            <div class="fenye-box">
                <ul>
                    <li><?php echo ($page); ?></li>
                </ul>
            </div>


    </div>
</div>
</div>


<!--footer开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="attention">
            <img src="/Public/images/weixin.png" alt=""/>
            <p>关注微信公众号</p>
        </div>
        <div class="contact">
            <ul>
                <li class="tel"><span></span>010—58690663</li>
                <li class="email"><span></span>weihehuo@163.com</li>
                <li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
                <li class="workday"><span></span>周一至周五 9:00——18:00</li>
            </ul>
        </div>
    </div>
</div>
<!--footer结束-->

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/datingSearch.js"></script>
<script type="text/javascript">
    $(function(){
        $('.nav-right ul li').hover(function(){
            if($(this).find('ol').size()!==0){
                $(this).find("ol").css({
                    display:"block"
                })
            }
        },function(){
            if($(this).find("ol").size()!==0){
                $(this).find("ol").css({
                    display:"none"
                })
            }
        })
    });

    $(function(){
        var oMoreCon = $(".more-conditions");
        $(".more-txt").click(function(){
            if(oMoreCon.is(":visible")){
                oMoreCon.hide();
                $(this).html("展开更多条件<i></i>");
                $(this).find("i").css("background-position","-1px -14px");
            }else{
                oMoreCon.show();
                $(this).html("收起更多条件<i></i>");
                $(this).find("i").css("background-position","-1px -20px");
            }
        })
    });

    $(function(){
        $(".hot-tags ul li").click(function(){
            $(this).toggleClass("cur");
        })
    });


    $(function(){
        checkOA($(".filter-conditions .selected-one a"));
        checkOA1($(".more-conditions .selected-one a"));
        checkOA($(".filter-conditions .selected-two a"));
        checkOA1($(".more-conditions .selected-two a"));
        checkOA($(".filter-conditions .selected-three a"));
        checkOA1($(".more-conditions .selected-three a"));

        $("body").click(function(){
            $(".filter-conditions .selected-item-con").prev().find("i").css("background-position","0 0");
            $(".more-conditions .selected-item-con").prev().find("i").css("background-position","-14px 0");
            $(".selected-item .selected-item-con").css("display","none");
        });

        $(".selected-one").click(function(){
            return false;
        });
        $(".selected-two").click(function(){
            return false;
        });
        $(".selected-three").click(function(e){
            console.log(e.target.tagName);
            if(e.target.tagName.toUpperCase() === "LABEL"){
                if($(e.target).find("input").prop("checked") == true){
                    $(e.target).find("input").prop("checked",false);
                }else{
                    $(e.target).find("input").prop("checked",true);
                }
            }
            return false;
        });


        function checkOA(arg){
            arg.click(function(){
                $(this).parents(".condition-box").find(".filter-conditions .selected-item-con").hide().prev().find("i").css("background-position","0 0");
                $(this).parents(".condition-box").find(".more-conditions .selected-item-con").hide().prev().find("i").css("background-position","-14px 0");
                if($(this).next().is(":visible")){
                    $(this).next().hide();
                    $(this).find("i").css("background-position","0 0");
                }else if($(this).next().is(":hidden")){
                    $(this).next().show();
                    $(this).find("i").css("background-position","0 -6px");
                }
            });
        }
        function checkOA1(arg){
            arg.click(function(){
                $(this).parents(".condition-box").find(".filter-conditions .selected-item .selected-item-con").hide().prev().find("i").css("background-position","0 0");
                $(this).parents(".condition-box").find(".more-conditions .selected-item .selected-item-con").hide().prev().find("i").css("background-position","-14px 0");
                if($(this).next().is(":visible")){
                    $(this).next().hide();
                    $(this).find("i").css("background-position","-14px 0");
                }else if($(this).next().is(":hidden")){
                    $(this).next().show();
                    $(this).find("i").css("background-position","-14px -6px");
                }
            });
        }

        $(".filter-conditions .selected-one select").change(function(){
            var val = $(this).find("option:selected").text();
            $(".selected-item-con").hide();
            $(this).parents(".selected-item").find("em").text(val);
            $(this).parents(".selected-item").find("i").css("background-position","0 0");
        });
        $(".more-conditions .selected-one select").change(function(){
            var val = $(this).find("option:selected").text();
            $(".selected-item-con").hide();
            $(this).parents(".selected-item").find("em").text(val);
            $(this).parents(".selected-item").find("i").css("background-position","-14px 0");
        });
        $(".filter-conditions .selected-two dl .btn-gray").click(function(){
            var val1 = $(this).parent().find(".ageBegin option:selected").text();
            var val2 = $(this).parent().find(".ageEnd option:selected").text();
            $(".selected-item-con").hide();
            $(this).parents(".selected-item").find("em").text(val1+"-"+val2+"岁");
            $(this).parents(".selected-item").find("i").css("background-position","0 0");
        });
        $(".filter-conditions .selected-three dl .btn-gray").click(function(){
            var val = [];
            $(this).parent().find("input:checked").each(function(){
                val.push($(this).val());
            });
            $(".selected-item-con").hide();
            $(this).parents(".selected-item").find("em").text(val.join(" "));
            $(this).parents(".selected-item").find("i").css("background-position","0 0");
        });
        $(".more-conditions .selected-three dl .btn-gray").click(function(){
            var val = [];
            $(this).parent().find("input:checked").each(function(){
                val.push($(this).val());
            });
            $(".selected-item-con").hide();
            $(this).parents(".selected-item").find("em").text(val.join(" "));
            $(this).parents(".selected-item").find("i").css("background-position","-14px 0");
        });

        /*$(".btn-search").click(function(){
         var oItem = $(".more-conditions .selected-item");
         var val1 = [],val2 = [];
         oItem.each(function(index){
         val1.push(oItem.eq(index).find("em").text());
         val2.push(oItem.eq(index).find("em").attr("data-default"));
         if(val1[index] !== val2[index]){

         $(".filter-conditions .selected-wrap-in").append("<div class='selected-item selected-one'>"+oItem.eq(index).html()+"</div>");
         $(".more-conditions").find(".selected-item").eq(index).remove();
         }
         });
         console.log(val1);


         })
         */
    });

    $(function(){
        var num = $('.paging-list ul li.cur').text();
        var oLi = $('.paging-list ul li');
        var len = oLi.length;
        $('.prev').css({ display:'none'});
        oLi.click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            num = $('.paging-list ul li.cur').text();
            if(num == 1){
                $('.prev').css({ display:'none'});
                $('.next').css({ display:'inline-block'});
            }else if(num == len){
                $('.next').css({ display:'none'});
                $('.prev').css({ display:'inline-block'});
            }else{
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
            }
        });
        $('.first').click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            $('.prev').css({ display:'none'});
            $('.next').css({ display:'inline-block'});
            num = 1;
            oLi.eq(num-1).addClass('cur').siblings().removeClass('cur')
        });
        $('.last').click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            $('.next').css({ display:'none'});
            $('.prev').css({ display:'inline-block'});
            num = 5;
            oLi.eq(num-1).addClass('cur').siblings().removeClass('cur');
        });
        $('.prev').click(function(){
            if(num<2){
                $('.first').addClass('cur');
                $('.prev').css({ display:'none'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(0).addClass('cur').siblings().removeClass('cur');
                return;
            }else{
                num--;
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(num).addClass('cur').siblings().removeClass('cur');
            }
        });
        $('.next').click(function(){
            if(num>len-1){
                $('.last').addClass('cur');
                $('.next').css({ display:'none'});
                $('.prev').css({ display:'inline-block'});
                oLi.eq(len).addClass('cur').siblings().removeClass('cur');
                return;
            }else{
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(num).addClass('cur').siblings().removeClass('cur');
                num++;
            }
        })
    });
</script>
</body>
</html>