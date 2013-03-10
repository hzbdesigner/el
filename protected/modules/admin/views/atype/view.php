<?php
/* @var $this AtypeController */
/* @var $model Atype */

$this->breadcrumbs=array(
	'Atypes'=>array('index'),
	$model->tid,
);

$this->menu=array(
	array('label'=>'List Atype', 'url'=>array('index')),
	array('label'=>'Create Atype', 'url'=>array('create')),
	array('label'=>'Update Atype', 'url'=>array('update', 'id'=>$model->tid)),
	array('label'=>'Delete Atype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atype', 'url'=>array('admin')),
);
?>

<h1>View Atype #<?php echo $model->tid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tid',
		'ttitle',
	),
)); ?>
