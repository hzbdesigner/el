<?php
/* @var $this BrandController */
/* @var $model Brand */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'brand-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'btitle'); ?>
		<?php echo $form->textField($model,'btitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'btitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bdes'); ?>
		<?php echo $form->textArea($model,'bdes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bdes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbanner'); ?>
		<?php echo $form->textField($model,'bbanner'); ?>
		<?php echo $form->error($model,'bbanner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bsubbanner'); ?>
		<?php echo $form->textField($model,'bsubbanner'); ?>
		<?php echo $form->error($model,'bsubbanner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bcontent'); ?>
		<?php echo $form->textArea($model,'bcontent',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bcontent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->