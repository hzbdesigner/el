<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ptitle'); ?>
		<?php echo $form->textField($model,'ptitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ptitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tid'); ?>
		<?php echo $form->textField($model,'tid'); ?>
		<?php echo $form->error($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bid'); ?>
		<?php echo $form->textField($model,'bid'); ?>
		<?php echo $form->error($model,'bid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pdes'); ?>
		<?php echo $form->textArea($model,'pdes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pdes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pimg'); ?>
		<?php echo $form->textField($model,'pimg'); ?>
		<?php echo $form->error($model,'pimg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->