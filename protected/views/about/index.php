

	<div class="page-wrapper about">
		<div class="nav-placeholder top"></div>
		<div class="container service">
			<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/about-title.png" /></div>

			<!--sidebar-->
			<div class="sidebar">
				<ul class="menus">

					<li class="<?php if ($this->action->id == 'index') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/about/brief'); ?>" >公司简介 </a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'culture') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/about/culture'); ?>" >企业文化</a><span> > </span></li>
					<li class="<?php if ($this->action->id == 'idea') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/about/idea'); ?>">公司理念</a><span> > </span></li>
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

