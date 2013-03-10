<?php
/* @var $this AtypeController */
/* @var $data Atype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tid), array('view', 'id'=>$data->tid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttitle')); ?>:</b>
	<?php echo CHtml::encode($data->ttitle); ?>
	<br />


</div>