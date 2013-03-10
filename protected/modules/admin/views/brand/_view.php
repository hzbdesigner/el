<?php
/* @var $this BrandController */
/* @var $data Brand */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bid), array('view', 'id'=>$data->bid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('btitle')); ?>:</b>
	<?php echo CHtml::encode($data->btitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bdes')); ?>:</b>
	<?php echo CHtml::encode($data->bdes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bbanner')); ?>:</b>
	<?php echo CHtml::encode($data->bbanner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bsubbanner')); ?>:</b>
	<?php echo CHtml::encode($data->bsubbanner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bcontent')); ?>:</b>
	<?php echo CHtml::encode($data->bcontent); ?>
	<br />


</div>