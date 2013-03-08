

	<div class="page-wrapper service">
		<div class="nav-placeholder top"></div>
		<div class="container service">
			<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/service-title.jpg" /></div>

			<!--sidebar-->
			<div class="sidebar">
				<ul class="menus">

					<li class="<?php if ($this->action->id == 'online') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/online'); ?>" >在线活动 </a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'history') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/history'); ?>" >历史活动</a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'company') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/company'); ?>">企业事迹</a><span> > </span></li>
				</ul>
			</div>

			<!--right content-->
			<div class="right-content">
				<?php echo $sub_content; ?>
			</div>

			<div class="placeholder"></div>
			
		</div>
		<div class="nav-placeholder bottom"></div>
	</div>

