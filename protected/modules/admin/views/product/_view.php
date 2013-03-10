<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pid), array('view', 'id'=>$data->pid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ptitle')); ?>:</b>
	<?php echo CHtml::encode($data->ptitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($data->tid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::encode($data->bid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pdes')); ?>:</b>
	<?php echo CHtml::encode($data->pdes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pimg')); ?>:</b>
	<?php echo CHtml::encode($data->pimg); ?>
	<br />


</div>