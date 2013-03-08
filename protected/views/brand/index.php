

	<div class="page-wrapper brand">
		<div class="nav-placeholder top"></div>
		<div class="container brand">

			<ul class="brand-tabs">
				<li class="<?php if ($this->action->id== 'Karges') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Karges'); ?>">Karges</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Henkel_Harris') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Henkel_Harris') ; ?>">Henkel Harris</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Henredon') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Henredon') ; ?>">Henredon</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Ourhouse') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Ourhouse') ; ?>">Ourhouse</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Maitland_Smith') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Maitland_Smith') ; ?>">Maitland Smith</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Jonathan_Charles') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Jonathan_Charles') ; ?>">Jonathan Charles</a></li>
				<div class="divider"></div>
				<li class="<?php if ($this->action->id== 'Eastern_Legend') { echo 'active';} ?>"><a href="<?php echo $this->createUrl('/brand/Eastern_Legend') ; ?>">Eastern Legend</a></li>
			</ul>

			<?php echo $sub_content; ?>

			<div class="placeholder"></div>
		</div>
		<div class="nav-placeholder bottom"></div>
	</div>

