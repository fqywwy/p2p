<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>首页</title>
<link rel="stylesheet" type="text/css" href="/assets/home/css/style.css">
<link href="/assets/home/css/css.css" rel="stylesheet">
<!--[if IE 6]> 
<script src="./js/iepng.js" type="text/javascript"></script> 
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, input,span, p');
</script>
<![endif]-->
</head>
<body>
<div class="top">
  <div class="wrap clearfix">
    <em class="myfont">&#xe632;</em><span class="songti">服务热线：</span><span class="tel">400-121-8232</span>
    <a href="#" target="_blank" class="ico weibo"></a>
    <a href="#" target="_blank" class="ico weixin"></a>
    <a href="#" target="_blank" class="ico qq"></a>
    <span class="fr"><a href="/index.php?r=login" class="loginbtn">登录</a><a href="/index.php?r=regist" class="o regbtn">免费注册</a><a href="about.html">帮助中心</a></span>
  </div>
</div>
<div class="head">
  <div class="wrap pct-h clearfix">
    <a href="/" class="indent"><img src="/assets/home/images/zxcf_logo.png" alt=""></a>
    <div class="fl"></div>
    <ul class="nav">
      <li><a href="/">首页</a></li>
      <li><a href="invest.html">我要投资</a></li>
      <li><a href="borrow.html">我要借款</a></li>
      <li><a href="about.html">关于我们</a></li>
    </ul>
  </div>
</div>
<!-- end top -->
<!-- end  -->
<div class="container">
    <?= $content ?>
</div>
<!-- foot -->
<script src="/assets/home/js/jquery.js"></script>
<script src="/assets/home/js/Action.js"></script>
<script src="/assets/home/js/waste.js"></script>
<script src="/assets/home/js/banner.js"></script>
<script src="/assets/home/js/jQuery-jcMarquee.js"></script>
<!--Partner-->
<div class="Partner mt10">
  <div class="wrap clearfix">
    <div class="hd fl">
      <b>合作伙伴</b>
      <span class="en">Partners</span>
    </div>
    <div class="bd fr">
      <div id="Marquee_x">
        <ul>
          <li>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_03.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_06.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_08.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_11.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_14.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_17.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_19.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_22.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_25.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_28.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_31.jpg"></a>
            <a href="http://www.htmlsucai.com" target="_blank" class="img"><img src="/assets/home/upload/logo_33.jpg"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="foot">
  <div class="wrap clearfix">
    <div class="footsection fl">
      <a href="about.html">关于我们</a>  |  <a href="news.html">网站公告</a>  |  <a href="reports.html">媒体报道</a>  |  <a href="partners.html">合作伙伴</a>  |  <a href="#">安全保障</a>  |  <a href="#">本金保障</a>  |  <a href="#">帮助中心</a>  |  <a href="#">如何投资</a>  |  <a href="#">如何借款</a>
      <p class="mt10">Copyright 2014 十七贷款, All Rights Reserved 版权所有 沪ICP备00000000号</p>
      <div class="img mt15 clearfix">
        <a href="#" target="_blank"><img src="/assets/home/images/img1.jpg"></a>
        <a href="#" target="_blank"><img src="/assets/home/images/img2.jpg"></a>
        <a href="#" target="_blank"><img src="/assets/home/images/img3.jpg"></a>
        <a href="#" target="_blank"><img src="/assets/home/images/img4.jpg"></a>
        <a href="#" target="_blank"><img src="/assets/home/images/img5.jpg"></a>
      </div>
    </div>
    <div class="footaside fr">
      热线电话 (服务时间 09:00 - 21:00 )
      <p><span class="tel">400-601-6629</span><a href="#" target="_blank">在线客服<em class="ico"></em></a></p>
      关注我们  <a href="#" target="_blank" class="ico weibo"></a> <a href="#" target="_blank" class="ico weixin"></a><a href="#" target="_blank" class="ico qq"></a>
    </div>
  </div>
</div>
<div class="Pop-up">
  <div class="pop-bd">
    <div class="hand"><div class="myfont close">&#xe611;</div></div>
    <div class="bd" id="form1">
      <div class="hd">会员登录</div>
      <div class="txt"><h1>为您提供简单、安全、高收益的理财服务</h1>优先选择有担保的优质债权 足值抵押物可以降低风险 分散投资，更能降低风险</div>
      <div class="form">
        <label><span>用户名</span><input type="text" class="form-control first" value="" name="name"></label>
        <label><span>密码</span><input type="password" class="form-control last" value="" name="name"></label>
        <button type="button" value="" class="button login" id="login" onclick="window.location.href='member.html'">登录</button>
        <div class="mt15"><a href="javascript:;" id="btnreg">没有帐号？</a>&nbsp;|&nbsp;<a href="#">忘记密码？</a></div>
      </div>
    </div>
    <div class="bd none" id="form2">
      <div class="hd">会员注册</div>
      <div class="txt"><h1>为您提供简单、安全、高收益的理财服务</h1>优先选择有担保的优质债权 足值抵押物可以降低风险 分散投资，更能降低风险</div>
      <div class="form">
        <label><span>用户名</span><input type="text" class="form-control first" value="" name="name"></label>
        <label><span>手机</span><input type="text" class="form-control" value="" name="name"></label>
        <label><span>密码</span><input type="password" class="form-control" value="" name="name"></label>
        <label><span>确认密码</span><input type="password" class="form-control last" value="" name="name"></label>
        <button type="button" value="" class="button login" id="reg" onclick="window.location.href='member.html'">注册</button>
        <div class="mt15"><a href="javascript:;" id="btnlogin">没有帐号？</a>&nbsp;|&nbsp;<a href="#">忘记密码？</a></div>
      </div>      
    </div>
  </div>
</div>
</body>
</html>
