
<div class="tab-pane " id="tab2">
	<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
		}
	?>
	<form class="form-horizontal" action="<?php echo $this->createUrl('/admin/product/create')?>" method='POST' enctype="multipart/form-data" >
		<fieldset>
			<legend>添加产品</legend>
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input class="span6" type="text" name='Product[ptitle]' placeholder="输入产品标题" value='<?php echo $model->ptitle; ?>'/>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">类型</label>
				<div class="controls">
					<?php
					foreach($types as $type){
						if($type->tid == $model->tid){
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$type[tid]' name='Product[tid]'' checked='checked' />
							<span style="width:60px;">$type[ttitle]</span>
						</label>
EOD;
						}else{
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$type[tid]' name="Product[tid]"  />
							<span style="width:60px;">$type[ttitle]</span>
						</label>
EOD;
						}
						
					}
					?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">类型</label>
				<div class="controls">
					<?php
					foreach($brands as $brand){
						if($brand->bid == $model->tid){
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$brand[bid]' name='Product[bid]'' checked='checked' />
							$brand[btitle]
						</label>
EOD;
						}else{
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$brand[bid]' name="Product[bid]"  />
							$brand[btitle]
						</label>
EOD;
						}
						
					}
					?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">描述</label>
				<div class="controls">
					<textarea rows="3" class="span5" name='Product[pdes]'><?php echo $model->pdes ; ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">图片</label>
				<div class="controls">
					<img src='<?php echo $model->pimg ; ?>' />
					<input type="file"  name="pimg"/>
				</div>
			</div>

			
			<div class="control-group action">
				<button class="btn btn-primary">保存</button>
				<button class="btn ">取消</button>
			</div>


		</fieldset>
		
	</form>
</div>

