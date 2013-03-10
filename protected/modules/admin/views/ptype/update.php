<?php
/* @var $this PtypeController */
/* @var $model Ptype */

$this->breadcrumbs=array(
	'Ptypes'=>array('index'),
	$model->tid=>array('view','id'=>$model->tid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ptype', 'url'=>array('index')),
	array('label'=>'Create Ptype', 'url'=>array('create')),
	array('label'=>'View Ptype', 'url'=>array('view', 'id'=>$model->tid)),
	array('label'=>'Manage Ptype', 'url'=>array('admin')),
);
?>

<h1>Update Ptype <?php echo $model->tid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>