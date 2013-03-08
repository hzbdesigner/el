

	<div class="page-wrapper service">
		<div class="nav-placeholder top"></div>
		<div class="container service">
			<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/service-title.jpg" /></div>

			<!--sidebar-->
			<div class="sidebar">
				<ul class="menus">

					<li class="<?php if ($this->action->id == 'index') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/service/index'); ?>" >配送服务 </a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'baoyang') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/service/baoyang'); ?>" >保养维护</a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'guwen') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/service/guwen'); ?>">家居顾问</a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'liuyan') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/service/liuyan'); ?>">留言反馈</a><span> > </span></li>
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

