<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>

<div class="tab-pane " id="tab2">
	
	<form class="form-horizontal" action="<?php echo $this->createUrl('/admin/activity/update',array('aid'=>$model->aid))?>" method='POST'>
		<fieldset>
			<legend>新建活动</legend>
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input class="span6" type="text" name='Activity[atitle]' placeholder="输入活动标题" value='<?php echo $model->atitle ; ?>'/>
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
							<input type="radio" value='$type[tid]' name='Activity[tid]'' checked='checked' />
							<span style="width:60px;">$type[ttitle]</span>
						</label>
EOD;
						}else{
						echo <<<EOD
						<label class="radio inline">
							<input type="radio" value='$type[tid]' name="Activity[tid]"  />
							<span style="width:60px;">$type[ttitle]</span>
						</label>
EOD;
						}
						
					}
					?>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">
					正文：
				</label>
				<div class="controls">
					<div id="activity_content"></div>
					<script type="text/plain" id="activity_textarea" name='Activity[acontent]'>
					</script>
				</div>
			</div>
			
			<div class="control-group action">
				<button class="btn btn-primary">保存</button>
				<button class="btn ">取消</button>
			</div>


		</fieldset>
		
	</form>
</div>

<script type="text/javascript">
	
$(function(){
	var Ueditor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/tool/ueditor/php/",
		initialContent:'<?php echo $model->acontent; ?>',
		textarea:'Activity[acontent]'
	});
	Ueditor.render('activity_content');

});
</script>