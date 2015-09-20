<?php
require "include/init/init.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="keywords" content="关键字"/>
	<meta name="description" content="网页描述"/>
	<title>泰一|首页</title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/base.css" />
	<link rel="stylesheet" href="css/flickity.css" />
</head>
<body>
	<?php require "include/header.php" ?>
	<div class="ad">
				<div><a href=""><img src="images/main-ad.png" alt=""></a></div>
				<div><a href=""><img src="images/main-ad.png" alt=""></a></div>
				<div><a href=""><img src="images/main-ad.png" alt=""></a></div>
				<div><a href=""><img src="images/main-ad.png" alt=""></a></div>
			</div>
	<div id="container">
		<div id="main">
			<div class="content">
				<div class="top">
					<img src="images/content-latestWorks.png">
					<img src="images/main-ad-bottom.png" style="margin:0 0 31px 106px;">
					<a href="">+ more..</a>
				</div>
				<div class="pic">
					<img src="images/picture1.png" alt="picture-st" style="margin-left:0;">
					<img src="images/picture2.png" alt="picture-nd">
					<img src="images/picture3.png" alt="picture-rd">
				</div>
				<div class="bottom">
					<div class="left">
						<h5>关于泰一文化传播</h5>
						<p style="margin-top:24px;"><a href="" style="color:#7eca24;">广州市泰一文化传播有限公司(Target)</a> 是一家集品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。</p>
						<p>别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target)迅速成为行内的新型文化传播先锋。</p>
						<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。</p>
						<img src="images/read-more.png" style="margin-top:21px;">
					</div>
					<div class="center">
						<h5>业务体系</h5>
						<ul>
							<li style="margin-top:27px;"><a href="">品牌策划、推广，影视包装</a></li>
							<li><a href="">公关活动策划，执行</a></li>
							<li><a href="">广告投放规划</a></li>
							<li><a href="">三维动画影视制作、宣传、发布、创意制作</a></li>
							<img src="images/read-more.png" style="margin-top:32px;">
						</ul>
					</div>
					<div class="right">
						<h5>公司动态</h5>
						<ul>
							<li>
								<p><a href="">2008年,广东省科技报指定网络运营商以及合作伙伴</a></p>
								<span>年获批省级项目《岭南建筑文化》三维动画制作以及策划推广2010年，执行广东产学院五周年庆典</span>
							</li>
							<li class="last">
								<p><a href="">2010年,策划珠江文化--南江古百越民间艺术节</a></p>
								<span>联合华工科技大学建筑学院举办《国际建筑文化论坛》</span>
							</li>
							<img src="images/read-more.png" style="margin-top:7px;">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require "include/footer.php" ?>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script type="text/javascript">
	$(".ad").flickity({
		wrapAround:"true",
		pageDots: "true",
		autoPlay: "1500"
	})
	</script>
</body>
</html>