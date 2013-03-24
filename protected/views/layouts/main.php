<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--required  script-->
<script language="javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/horizon.css">
<!--link href="<?php echo Yii::app()->baseUrl ; ?>/css/horizon.less" rel="stylesheet/less" type="text/css">
<script language="javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/less.js"></script-->


<!--demo  code example-->

<title>东方传奇</title>
</head>
<body>
	
	<div class="nav">
		<div class="container">
			<a href="<?php echo $this->createUrl('/site') ; ?>" class="logo">logo</a>
			<div class="nav-inner">
				<ul class="navs">
					<li class="about nav-cell"><a href="<?php echo $this->createUrl('/about');?>"> </a>
						<ul class="dropdowns">
							<li class="dropdown"><a href="<?php echo $this->createUrl('/about/brief');?>">公司简介</a></li>
							<!-- <li class="dropdown"><a href="<?php echo $this->createUrl('/about/culture');?>">企业文化</a></li> -->
							<li class="dropdown"><a href="<?php echo $this->createUrl('/about/idea');?>">经营理念</a></li>
						</ul>
					</li>
					<li class="brand  nav-cell"><a href="<?php echo $this->createUrl('/brand');?>" > </a>
						<ul class="dropdowns">
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Karges');?>">Karges</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Henkel_Harris');?>">Henkel Harris</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Henredon');?>">Henredon</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Ourhouse');?>">Ourhouse</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Maitland_Smith');?>">Maitland-Smith</a></li>
							<li class="dropdown" ><a href="<?php echo $this->createUrl('/brand/Jonathan_Charles');?>" style="line-height:18px;height:40px;">Jonathan Charles</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/brand/Eastern_Legend');?>">Eastern Legends</a></li>
						</ul>
					</li>

					<li class="product  nav-cell"><a href="<?php echo $this->createUrl('/product/index',array('tid'=>0,'bid'=>0));?>" > </a>
						<!-- <ul class="dropdowns">
							<li class="dropdown"><a href="#em">客厅</a></li>
							<li class="dropdown"><a href="#em">餐厅</a></li>
							<li class="dropdown"><a href="#em">卧室</a></li>
							<li class="dropdown"><a href="#em">书房</a></li>
							<li class="dropdown"><a href="#em">饰品</a></li>
							<li class="dropdown"><a href="#em">其他</a></li>
						</ul> -->
					</li>
					<li class="service  nav-cell"><a href="<?php echo $this->createUrl('/service');?>" > </a>
						<ul class="dropdowns">
							<li class="dropdown"><a href="<?php echo $this->createUrl('/service/index') ; ?>">配送服务</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/service/baoyang') ; ?>">保养维护</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/service/guwen') ; ?>">家居顾问</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/service/liuyan') ; ?>">留言反馈</a></li>
						</ul>
					</li>
					<li class="activity  nav-cell"><a href="<?php echo $this->createUrl('/activity/all');?>"> </a>
						<ul class="dropdowns">
							<li class="dropdown"><a href="<?php echo $this->createUrl('/activity/online');?>">在线活动</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/activity/history');?>">历史活动</a></li>
							<li class="dropdown"><a href="<?php echo $this->createUrl('/activity/company');?>">公司事迹</a></li>
						</ul>
					</li>
					<li class="contact  nav-cell"><a href="<?php echo $this->createUrl('/contact');?>"> </a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- layout  -->
	<?php echo $content; ?>
	
	<div class="footer <?php if ($this->id=='site') {echo 'index';} else{echo 'other';}; ?>"
	>
		<div class="container">
			<ul class="friendlink">
				<li ><a href="<?php echo $this->createUrl('/site'); ?>">首页 </a></li>
				<li ><a href="#">国际版 </a></li>
				<li ><a href="#">法律声明 </a></li>
				<li ><a href="#">加入团队 </a></li>
				<li ><a href="#">东方传奇微博 </a></li>
			</ul>
			<div class="search">
				<!-- <form>
					<input placeholder="搜索"  />
				</form> -->
				<script>
				  (function() {
				    var cx = '013636378173885203879:ncisgarv7li';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				        '//www.google.com/cse/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
			</div>
			<p class="copyright"><span>北京东方传奇家具有限公司版权所有©2013</span>&nbsp;&nbsp;<span>京ICP备 1111111111号</span></p>
		</div>
	</div>

	<!--js script  -->
	<!--index js  -->
	<script language="javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/responsiveslides.js"></script>
	<!--product js  -->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/modernizr.custom.79639.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/slider.js"></script>
	
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/jquery.carouFredSel.js"></script>

	<!--products js  -->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/hoverdir.js"></script>
	<!--all js  -->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ; ?>/js/app.js"></script>
		

</body>
</html>
