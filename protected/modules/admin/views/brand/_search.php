<?php
/* @var $this BrandController */
/* @var $model Brand */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bid'); ?>
		<?php echo $form->textField($model,'bid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'btitle'); ?>
		<?php echo $form->textField($model,'btitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bdes'); ?>
		<?php echo $form->textArea($model,'bdes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbanner'); ?>
		<?php echo $form->textField($model,'bbanner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bsubbanner'); ?>
		<?php echo $form->textField($model,'bsubbanner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bcontent'); ?>
		<?php echo $form->textArea($model,'bcontent',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->