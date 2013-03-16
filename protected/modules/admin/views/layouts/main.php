<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>东方传奇-后台管理</title> 
	<meta name="description" content="admin Bootstrap Theme"/>
	<meta name="keywords" content="admin, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="hzbdesigner"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<!-- <meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/> -->
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="<?php echo Yii::app()->baseUrl ; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl ; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->baseUrl ; ?>/css/style_admin.css" rel="stylesheet">

	<script src="<?php echo Yii::app()->baseUrl ; ?>/js/jquery-1.8.2.js"></script>

	<script type="text/javascript">
		window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!--[if IE 9]>
      <link href="css/styleie9.css" rel="stylesheet">
    <![endif]-->

</head>
<body>
		
		<!--start: Header -->
		<div class="navbar navbar-static-top">
		  <div class="navbar-inner">
		  		<div class="container">
				    <a class="brand" href="<?php echo $this->createUrl('/site') ;?>">东方传奇</a>
				    <ul class="nav">
				      <li class="<?php if ( $this->id=='product') {echo('active');}  ?>"><a href="<?php echo $this->createUrl('/admin/product/admin') ;?>">product产品</a></li>
				      <li><a href="#">brand品牌</a></li>
				      <li class="<?php if ( $this->id=='activity') {echo('active');}  ?>"><a href="<?php echo $this->createUrl('/admin/activity/admin') ;?>">activity活动</a></li>
				      <li><a href="#">页面</a></li>
				      <li><a href="#">管理员</a></li>
				      <li><a href="#">退出</a></li>
				    </ul>
			    </div>
		   
		  </div>
		</div>
		<!--end: Header-->
		
		<?php echo $content; ?>
					

		<!-- start: Copyright -->
		<div id="copyright">
		
			<!-- start: Container -->
			<div class="container">
				<hr>
			
				<div class="span12">
					<p>
						&copy; 2012, Designed by esternlegend.
					</p>
				</div>
		
			</div>
			<!-- end: Container  -->
			
		</div>	
		<!-- end: Copyright -->

	<!-- start: Java Script -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script src="<?php echo Yii::app()->baseUrl ; ?>/js/bootstrap.js"></script>
	<script defer="defer" src="<?php echo Yii::app()->baseUrl ; ?>/js/custom.js"></script>


<!-- end: Java Script -->

</body>
</html>