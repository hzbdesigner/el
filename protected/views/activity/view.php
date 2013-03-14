

		<div class="container activity">
			<div class="title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/activity-title.png" /></div>

				<!-- <ul class="menus">
					<li class="<?php if ($this->action->id == 'online') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/online'); ?>" >首页 </a></li>
					<li class="<?php if ($this->action->id == 'history') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/history'); ?>" >在线活动</a></li>
					<li class="<?php if ($this->action->id == 'company') {echo 'active';} ?>"><a href="<?php echo $this->createUrl('/activity/company'); ?>">内容</a></li>
				</ul> -->

			<div class="article">
				<div class="title"><?php echo $activity->atitle ; ?></div>
				<div class="subtitle"></div>
				<div class="content">
					<?php echo $activity->acontent ; ?>
				</div>
			</div>

		</div>

