

	<div class="container">
		<div class="row tabbable tabs-left">
			
				<ul class=" span2 nav nav-pills nav-stacked">
					<li class="<?php if( $this->action->id=='admin'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/activity/admin') ; ?>" >活动管理</a> </li>
					<li class="<?php if( $this->action->id=='create'){ echo 'active';} ?>"> <a href="<?php echo $this->createUrl('/admin/activity/create') ; ?>"  >添加活动</a> </li> 
				</ul>
				<div class="span10">
					
				<?php echo $sub_content ;?>
				</div>
		</div>
	</div>
