<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="keywords" content="关键字"/>
	<meta name="description" content="网页描述"/>
	<title></title>
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/activeCont.css" />
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<?php require "include/header.php" ?>
	<div id="container">
		<div id="main">
			<div class="top">
				<img src="images/main-top-left.png" />
				<div>Laster News</div>
			</div>
			<div class="left">
				<div class="slider">
					<div>
						<a href=""><img src="images/activeCont-ad.png" /></a>
						<a href=""><img src="images/ad1.png" /></a>
						<a href=""><img src="images/ad2.png" /></a>
						<a href=""><img src="images/ad3.png" /></a>
						<a href=""><img src="images/ad4.png" /></a>
					</div>
					<ul class="page">
						<li style="background:#cc2a1e">1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
					</ul>
				</div>
				<div class="left-top" >
					<h1>
						TARGET NEWS 
						<span style="font-size:14px;">公司新闻</span>
						<img src="images/activeCont-threeArrow.png" />
					</h1>
				</div>
				<div class="content">
					<div class="contentLeft">Update<p>2011.06.07</p></div>
					<div class="contentRight">
						<div class="rightTop">联合华工科技大学建筑学院举办《国际建筑文化论坛》</div>
						<div class="rightCenter">
							<p style="margin-top:30px;">广州市泰一文化传播有限公司(Target) 是一家集</p>
							<p>品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。</p>
							<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。广州市泰一文化传播有限公司(Target) 是一家集</p>
							<p>品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。</p>
							<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。</p>
						</div>
						<ul class="rightBottom">
							<li class="first"><a href="">获批省级项目《岭南建筑文化》三维动画制作以及推广</a></li>
							<li class="second"><a href="">联合华工科技大学建筑学院举办《国际建筑文化论坛》</a></li>
						</ul>
						<a href=""><img src="images/activeCont-return.png"></a>
						<div class="clear"></div>
						<a href=""><img src="images/activeCont-toTop.png"></a>
					</div>
				</div>				
			</div>
			<div class="right">
				<ul class="top">
					<h2>公司概况<span> COMPANY INFO</span></h2>
					<li><a href="" class="first">公司介绍</a></li>
					<li><a href="">公司理念</a></li>
					<li><a href="">服务体系</a></li>
					<li><a href="">联系我们</a></li>
				</ul>
				<ul class="bottom">
					<h2>更新要闻<span> NEWS</span></h2>
					<li>
						<a href="">2011年南京市动漫协会...<span>News 2011.06.07</span></a>
					</li>
					<li>
						<a href="">上海丝路荣获上海市金...<span>News 2011.06.07</span></a>
					</li>
					<li>
						<a href="">丝路作品被《CG World...<span>News 2011.05.28</span></a>
					</li>
					<li>
						<a href="">丝路作品被《CGM数学...<span>News 2011.05.28</span></a>
					</li>
					<li>
						<a href="">丝路集团应邀请参与制定...<span>News 2011.05.12</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php require "include/footer.php" ?>
	<script type="text/javascript">
			//图片
			var i=0;
			function showPic(){
				i++;
				$('.slider img').removeClass('show').eq(i%6).addClass('show');
				$('.page li').eq(i%6).css("background","#cc2a1e").siblings().css("background","#000");
			}
			var timer=setInterval(showPic,1000);
			$('.slider').mouseover(function(){
				clearInterval(timer);
			}).mouseout(function(){
				timer=setInterval(showPic,1000);
			})
			$('.page li').mouseover(function(){
				var num=$(this).index();
				$('.slider img').removeClass('show').eq(num).addClass('show');
				$('.page li').eq(num).css("background","#cc2a1e").siblings().css("background","#000");
				i=num;
			})
	</script>
</body>
</html>