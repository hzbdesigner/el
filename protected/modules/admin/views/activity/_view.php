<?php
/* @var $this ActivityController */
/* @var $data Activity */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aid), array('view', 'id'=>$data->aid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atitle')); ?>:</b>
	<?php echo CHtml::encode($data->atitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acontent')); ?>:</b>
	<?php echo CHtml::encode($data->acontent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />


</div>