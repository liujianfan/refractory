<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/style.css">
	<title>耐火材料 V1.0</title>
</head>
<body>
	<!-- Nav-start -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<!-- <div class="container-fluid"> -->
			<div class="navbar-header hidden-md hidden-sm">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img class="pull-left clearfix" src="./img/logo.png" alt="Brand">河南万之联
				</a>
			</div>
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav  navbar-nav">
					<li class="active"><a href="#">网站首页</a></li>
					<li><a href="./product.php">产品中心</a></li>
					<li><a href="./news.html">新闻动态</a></li>
					<li><a href="./about.html">公司简介</a></li>
					<li class="dropdown">
						<a href="./contact.html" class="dropdown-toggle" data-toggle="dropdown">
							联系方式 <b class="caret"></b>
						</a>
						<ul class="dropdown-menu" style="padding-left:10px;width:180px;">
							<li>
								<address>
									<strong>河南万之联贸易有限公司</strong><br>
									南阳路239号<br>
									河南 郑州, 邮编 450000<br>					  
								</address>
							</li>
							<li class="divider"></li>
							<li>
								<address>
									<abbr title="Phone">联系电话：</abbr><br> (+86) 0371-63737678
								</address>
							</li>
							<li class="divider"></li>
							<li>
								<address>
									<strong>业务邮箱：</strong>
									<a href="mailto:wzl@wanzhilian.com">wzl@wanzhilian.com</a>
								</address>
							</li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
		         	<div class="form-group">
			         	<input type="text" class="form-control" placeholder="Search">
			        </div>
		            <button type="submit" class="btn btn-default">Submit</button>
		      	</form>
			</div>
		</div>
	</nav>
	<!-- Nav-end -->

	<div class="container">
		<!-- Banner-start -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="./img/1.jpg" alt="...">
		      <div class="carousel-caption">
		        <h3>换购双十一！全线产品5折起！</h3>
		        <p>一年一度的双十一已经到来，今天，你剁手了吗？</p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="./img/2.jpg" alt="...">
		      <div class="carousel-caption">
		      	<h3>心动腊八，年货抢先！</h3>
		        <p>你想说些什么呢？</p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="./img/3.jpg" alt="...">
		      <div class="carousel-caption">
		      	<h3>豪华波士顿皮包</h3>
		        <p>想你所想，要你所要</p>
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- Baner-end -->

		<!-- Body-start -->
		<div class="mainbody">
			<br>
			<!-- 热销产品-start -->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">产品展示 <a href="#">MORE+</a></h3>
				</div>
				<div class="panel-body">
					<ul class="media-list">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="./img/arifeicon.png" alt="媒体对象">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">河南万之联</h4>
								这是一些示例文本。这是一些示例文本。这是一些示例文本。这是一些示例文本。
							</div>
						</li>
						<li class="media">							
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="./img/arifeicon.png" alt="媒体对象">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">河南万之联</h4>
								这是一些示例文本。这是一些示例文本。这是一些示例文本。这是一些示例文本。
							</div>							
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<!-- 热销产品-end -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">企业动态 <a href="#">MORE+</a></h3>
						</div>
						<div class="panel-body">
							<ul class="">
								<li>
									<a href="#">
										热烈祝贺万之联有限公司纳斯达克成功上市！ 
										<span class="glyphicon glyphicon-picture" style="color:green"></span>
									</a>&nbsp;&nbsp;
									<span class="newsdate">2014-10-01</span>												
								</li>
							</ul>		
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">行业资讯 <a href="#">MORE+</a></h3>
						</div>
						<div class="panel-body">
							<ul class="">
								<li>
									<a href="#">
										耐火材料造价已创历史新低！还不入手？ 
										<span class="glyphicon glyphicon-picture" style="color:green"></span>
									</a>&nbsp;&nbsp;
									<span class="newsdate">2014-10-01</span>												
								</li>								
							</ul>		
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">公司简介</h3>
				</div>
				<div class="panel-body">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;河南万之联贸易有限公司是<span class="hidden-xs">集研究、生产、和销售为一体的企业，下属设有河南省探矿机器厂、孝义运来机械厂、河南开拓机械厂。公司自成立以来始终坚持以质量求生存，以科技求进步，以信誉求发展，以管理求效益，依靠雄厚的科技实力，高技能的管理人才，严格的检测手段，推出各类型优质系列矿山机械设备。

						我公司位于河南省郑州市南阳路239号。2007年国营企业改制，河南探矿设计院和河南新乡勘探院合并为河南探矿机械院，由此河南省探矿机器厂从探矿设计院分出，变为私营，地址不变，于2008年成立河南开拓机械有限公司。2014年成立河南万之联矿山设备有限公司。

						本公司主要产品分为四大类，其中破碎产品包括：鄂式破碎机、锤式破碎机、圆锥破碎机、冲击式破碎机、复合式破碎机、辊式破碎机、反击式破碎机、雷蒙磨、环锤式碎煤机、环锤破碎机、移动破碎站等；选矿设备类包括：球磨机、棒磨机、磁选机、浮选机；螺旋洗石机、双轮斗洗砂机、回转窑冷却机等；搅拌设备类包括：混凝土搅拌站、沥青搅拌站、移动搅拌站等；木材设备类包括：木粉机、模板破碎机、颗粒机、烘干机、刨花机等。

						我公司技术力量雄厚，拥有一支专业的技术队伍，生产设备精良，检测手段齐全。配备先进的CAD计算机辅助设计系统和计算机模拟测试系统，科技的重资投入，促使新产品不断研制开发；严格的质量管理，保证产品质量的稳步提高；优质过硬的产品是我公司在同行业始终处于领先地位。以管理规范为基石，以市场拓展为平台，以产品创新为砥柱，以技术进步为桥梁，以品质卓越为保障，以现代一流企业的运作水平为管理目标，公司的成长离不开优秀的员工，先进的技术，精良的设备，严格的管理。公司自成立以来一直以一流的产品质量和精湛的服务受到了用户的一致好评。产品覆盖全国各地，并远销蒙古、俄罗斯、哈萨克斯坦、格鲁吉亚、越南、印度、南非等十几个国家和地区。客户至上，诚信为本！客户的满意是我们永远的追求！
					</span><a href="#">...More</a></p>
				</div>
			</div>
		</div>
		<!-- Body-end -->
	</div>
	<!-- Footer-start -->
	<div class="footer">
		<div class="container">
			<dl class="col-lg-4 col-xs-6 col-md-4 col-sm-4">
				<dt>我们的服务</dt>
				<dd>场地考察接送</dd>
				<dd>产品跟踪服务</dd>
			</dl>
			<dl class="col-lg-4 col-xs-6 col-md-4 col-sm-4">
				<dt>我们的产品</dt>
				<dd>售前详细了解</dd>
				<dd>售后贴心服务</dd>
			</dl>
			<dl class="col-lg-4 col-xs-6 col-md-4 col-sm-4">
				<dt>河南万之联</dt>
				<dd>起始于2003年</dd>
				<dd>售后贴心服务</dd>
			</dl>	
		</div>
		<hr>
		<p class="copyword text-center">河南万之联贸易有限公司 &copy; 2014-2015 版权所有  地址： 郑州市南阳路239号</p>
	</div>
	<!-- Footer-end -->
</body>
</html>