<?php
/* @var $this PtypeController */
/* @var $model Ptype */

$this->breadcrumbs=array(
	'Ptypes'=>array('index'),
	$model->tid,
);

$this->menu=array(
	array('label'=>'List Ptype', 'url'=>array('index')),
	array('label'=>'Create Ptype', 'url'=>array('create')),
	array('label'=>'Update Ptype', 'url'=>array('update', 'id'=>$model->tid)),
	array('label'=>'Delete Ptype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ptype', 'url'=>array('admin')),
);
?>

<h1>View Ptype #<?php echo $model->tid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tid',
		'ttitle',
	),
)); ?>
