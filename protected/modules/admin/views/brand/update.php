

<div class="tab-pane " id="tab2">
	<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
		}
		$bid=$model->bid;
	?>
	<form class="form-horizontal" action="<?php echo $this->createUrl('/admin/brand/update',array('bid'=>$bid))?>" method='POST' enctype="multipart/form-data" >
		<fieldset>
			<legend>新建品牌</legend>
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input class="span6" type="text" name='Brand[btitle]' placeholder="输入品牌英文名字" value='<?php echo $model->btitle ; ?>'/>
				</div>
			</div>
			
			
			<div class="control-group action">
				<button class="btn btn-primary">保存</button>
				<button class="btn ">取消</button>
			</div>


		</fieldset>
		
	</form>
</div>



