<div class="container activity">
	<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/activity-title.png" /></div>

		<ul class="menus">
			<li class="<?php if ($this->action->id == 'online') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/online'); ?>" >在线活动 </a></li>
			<li class="<?php if ($this->action->id == 'history') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/history'); ?>" >历史活动</a></li>
			<li class="<?php if ($this->action->id == 'company') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/company'); ?>">企业事迹</a></li>
		</ul>
</div>


<div id="slides">
			<div class="slides_container">
				
				<div class="slide">
					<div class="item">
						<div class="title"><a href="<?php echo $this->createUrl('/activity/view') ; ?>">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
				</div>
				
				<div class="slide">
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
				</div>
				
				<div class="slide">
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
					<div class="item">
						<div class="title"><a href="#">新闻标题，新闻标题，新闻标题</a></div>
						<div class="content">
							<div class="img"><img src="<?php echo Yii::app()->baseUrl; ?>/images/news-img.png"></div>
							<div class="des">新闻简介新闻简介</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="bottom-img"></div>
		<div class="left-img"></div>