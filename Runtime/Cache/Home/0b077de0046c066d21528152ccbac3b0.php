<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>云返汽车集团</title>
	<meta name="keywords" content="云返汽车集团">
	<meta name="description" content="云返汽车集团">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="/Public/images/favicon.ico">
	
	<!-- include main css -->
	<link rel="stylesheet" type="text/css" href="/Public/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/style.css"/>
	<link href="/Public/font-awesome-4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' media="all" />
	<link rel="stylesheet" type="text/css" href="/Public/css/animate.css"/>
	
	<!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
<div>
	<!--header-->
	<header class="header_zi">
	   <div class="container">
		   <div class="logo">
	   	   		<a href="<?php echo U('Index/index');?>"><img src="/Public/images/logo.png" alt="" /></a>
		   </div>
		   <a href="#mmenu" class="phone-nav"><i class="fa fa-list"></i></a>
		  <div class="logo_right">
		  	 <nav class="nav">
		   		<ul>    
		   			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
		   			<li><a href="<?php echo U('Index/infuncar');?>">云返汽车</a></li>
		   			<li><a href="<?php echo U('Index/about');?>">关于我们</a>
		   				<ul>
		   					<li><a href="<?php echo U('Index/about');?>">企业概况</a></li>
		   					<li><a href="#">发展历程</a></li>
		   					<li><a href="#">品牌形象</a></li>
		   					<li><a href="<?php echo U('Index/honor');?>">品牌荣誉</a></li>
		   				</ul>
		   			</li> 
		   			<li><a href="<?php echo U('Index/join');?>">招商加盟</a></li>
		   			<li><a href="<?php echo U('Index/news');?>">新闻动态</a>
		   				<ul>
		   					<li><a href="<?php echo U('Index/news');?>">公司新闻</a></li>
		   					<li><a href="#">行业新闻</a></li>
							<li><a href="<?php echo U('Index/notice');?>">企业公告</a></li>
		   				</ul>
		   			</li>
		   			<li><a href="<?php echo U('Index/feedback');?>"  class="active">留言中心</a></li>
		   			<li><a href="<?php echo U('Index/contact');?>">联系我们</a></li>
		   		</ul>
		  	 </nav>
		  	 <div class="search">
		  	 	<span class="sea_x">
		  	 		<input type="" name="" id="" placeholder="请输入关键词">
		  	 		<i class="fa fa-search"></i>		  	
		  	 	</span>
		  	 	<span class="y_z">
		  	 		<a href="" class="zh active">中</a><a href="" class="en">En</a>
		  	 		
		  	 	</span>
		  	 </div>
		  </div>
	   	
	   </div>
	</header>
			
	<!--banner  start-->
	<section class="banner_zi">
	    <div><img src="/Public/images/banner_liu.png" alt=""></div>
	</section>
	<!--banner end-->
	<div class="head_bar">
		<span>位置：</span><a href="<?php echo U('Index/index');?>">首页 </a> > <span class="active">留言中心</span>
	</div>
		<div class="feedback_con">
			<div class="top_tit">
				<span class="span1"><a href="<?php echo U('Index/feedback');?>">留言中心</a></span><br />
				<span class="con_span">您好，对云返汽车有任何疑问都可以给我们留言，我们会尽快回复！</span>
			</div>
			<ul class="liu_ul">
				<li class="clearfix">
					<p class="p1">
						<span><i>*</i>标题</span><input type="text" />
					</p>
					<p>
						<span><i>*</i>姓名</span><input type="text" />
					</p>
				</li>
				<li class="clearfix">
					<p class="p1"><span><i>*</i>手机</span><input type="text" /></p>
					<p>
						<span><i>*</i>邮箱</span><input type="text" />
					</p>
				</li>
				<li>
					
						<span class="span_nei"><i>*</i>内容</span>
						<textarea name="" rows="7" cols=""></textarea>
						
				</li>
				<li class="clearfix yan_li">
				 <span><i>*</i>验证码</span><input type="text" />
				 <img src="/Public/images/yan.png" alt="" />
					<a href="" class="yan_no">看不清,换一张?</a>
				</li>
				<li class="btn">
					<a href="">提交</a>
					&nbsp;
					<a href="">重置</a>
					
					
				</li>
			</ul>
				
		</div>

	
	<!--<div class="home_news">-->
		<!--<div class="news_con">-->
			<!--<div class="top_tit">-->
				<!--<span class="span1"><a href="<?php echo U('Index/news');?>">新闻动态</a></span><br />-->
				<!--<span class="span2">NEWS</span>-->
			<!--</div>-->
			<!--<ul>-->
				<!--<li class="clearfix">-->
					<!--<div class="news_left">-->
						<!--<a href="<?php echo U('Index/news');?>">暑假去哪玩？桃花苑天地避暑甚好！</a>-->
						<!--<p>-->
							<!--暑期近在眼前，还在犹豫带孩子去哪儿玩吗？炎热的夏天，一颗躁动的心，背上收拾好的背包，走遍大好河山-->
							<!--，感受大千世界，还不如隐居室外桃源桃花苑天地精品。少一些城市的喧嚣，回归大自然的清新脱俗，来一场说走就走的夏日之旅吧。-->
						<!--</p>-->
					<!--</div>-->
					<!--<div class="news_right">-->
						<!--<span>07.21</span>-->
						<!--<time>2016</time>-->
					<!--</div>-->
				<!--</li>-->
				<!--<li class="clearfix">-->
					<!--<div class="news_left">-->
						<!--<a href="<?php echo U('Index/news');?>">花落流水春又去</a>-->
						<!--<p>-->
							<!--春暖花开，桃花苑天地精品大咖云集，活动丰富。不仅有适合小朋友们的春游活动，有适合老年朋友的喝茶加棋牌，-->
							<!--还有书法大咖们的加盟，乃至电视真人秀节目的拍摄。这可把桃花宝宝们忙坏了，不过没关系，累并快乐着，桃花宝宝非常欢迎大家的到来……-->
						<!--</p>-->
					<!--</div>-->
					<!--<div class="news_right">-->
						<!--<span>05.25</span>-->
						<!--<time>2016</time>-->
					<!--</div>-->
				<!--</li>-->
				<!--<li class="clearfix">-->
					<!--<div class="news_left">-->
						<!--<a href="<?php echo U('Index/news');?>">蝴蝶摘花来</a>-->
						<!--<p>-->
							<!--清朝末年，先生在宁波开了一家面店，生意不错。一天，一位即将回国的美国华侨-->
							<!--，登船前来到卜先生的店里吃面，离店时竟把一只皮箱落下了。-->
							<!--先生打烊时才发现这只皮箱，但已无法找到失主，只好把皮箱小心收藏，等待着失主前来认领。-->
						<!--</p>-->
					<!--</div>-->
					<!--<div class="news_right">-->
						<!--<span>05.25</span>-->
						<!--<time>2016</time>-->
					<!--</div>-->
				<!--</li>-->
				<!--<li class="clearfix">-->
					<!--<div class="news_left">-->
						<!--<a href="<?php echo U('Index/news');?>">这是我们想去的地方</a>-->
						<!--<p>-->
							<!--春暖花开，桃花苑天地精品大咖云集，活动丰富。不仅-->
							<!--有适合小朋友们的春游活动，有适合老年朋友的喝茶加棋牌，-->
							<!--还有书法大咖们的加盟，乃至电视真人秀节目的拍摄。-->
							<!--这可把桃花宝宝们忙坏了，不过没关系，累并快乐着，桃花宝宝非常欢迎大家的到来……-->
						<!--</p>-->
					<!--</div>-->
					<!--<div class="news_right">-->
						<!--<span>05.25</span>-->
						<!--<time>2016</time>-->
					<!--</div>-->
				<!--</li>-->
			<!--</ul>-->
			<!--<a href="<?php echo U('Index/news');?>" class="more">MORE</a>-->
		<!--</div>-->
	<!--</div>-->

	
 
    <!--footer  start-->
	<footer class="footer">
		<div class="footer_con">
			<div class="con">
				<div class="nei">
					<div class="">
						<ul class="di_nav clearfix">
							<li><a href="<?php echo U('Index/infuncar');?>">云返汽车</a></li>
							<li><a href="<?php echo U('Index/about');?>">关于我们</a></li>
							<li><a href="<?php echo U('Index/join');?>">招商加盟</a></li>
							<li><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
							<li><a href="<?php echo U('Index/feedback');?>">留言中心</a></li>
							<li><a href="<?php echo U('Index/contact');?>">联系我们</a></li>
						</ul>
						<div class="links">友情链接
							<ul>
								<li><a href="">百度文化</a></li>
								<li><a href="">新浪微博</a></li>
								<li><a href="">百度知道</a></li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
					<div class="lian">
						总部电话：<a href="">020-39270000</a><br />
						客服热线：<a href="">400-900-4448</a><br />
						邮箱：<a href="mailto:Eason.wang@71360.com">yunfanqiche3@163.com</a><br />
						地址：广东市番禺区大北路555号云返汽车城<br />
					</div>

				</div>
			</div>

		</div>
		<div class="copy">Copyright© 2018  版权所有：广东云返汽车销售有限公司 </div>
	</footer>
    <!--footer  end-->

	<!--移动端  Mmenu-->
	<nav id="mmenu">
		
		<ul>
		
			<li><a href="<?php echo U('Index/index');?>" class="active">首页</a></li>
   			<li><a href="<?php echo U('Index/infuncar');?>">云返汽车</a></li>
   			<li><a href="<?php echo U('Index/about');?>">关于我们</a>
            	<ul>
		   					<li><a href="<?php echo U('Index/about');?>">企业概况</a></li>
		   					<li><a href="#">发展历程</a></li>
		   					<li><a href="#">品牌形象</a></li>
		   					<li><a href="<?php echo U('Index/honor');?>">品牌荣誉</a></li>
		   				</ul>
            </li>
   			<li><a href="<?php echo U('Index/join');?>">招商加盟</a></li>
   			<li><a href="<?php echo U('Index/news');?>">新闻动态</a>
   				<ul>
   					<li><a href="<?php echo U('Index/news');?>">公司新闻</a></li>
   					<li><a href="#">行业新闻</a></li>
					<li><a href="<?php echo U('Index/notice');?>">企业公告</a></li>
   				</ul>
   			</li>
   			<li><a href="<?php echo U('Index/feedback');?>">留言中心</a></li>
   			<li><a href="<?php echo U('Index/contact');?>">联系我们</a></li>
			 
		</ul>
	</nav>	</div>	

<!--Include Js-->
<script src="/Public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<!--移动端导航-->
<script src="/Public/js/jquery.mmenu.all.min.js" type="text/javascript" charset="utf-8"></script>

<script src="/Public/js/public.js" type="text/javascript" charset="utf-8"></script>

<!--slick-->
<script src="/Public/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/js/wow.js" type="text/javascript" charset="utf-8"></script>

<!--placeholder-->
<script src="/Public/js/jquery.placeholder.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(function(){ $('input, textarea').placeholder(); });
</script>

<!--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

</body>
</html>