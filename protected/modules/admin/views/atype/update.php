<?php
/* @var $this AtypeController */
/* @var $model Atype */

$this->breadcrumbs=array(
	'Atypes'=>array('index'),
	$model->tid=>array('view','id'=>$model->tid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atype', 'url'=>array('index')),
	array('label'=>'Create Atype', 'url'=>array('create')),
	array('label'=>'View Atype', 'url'=>array('view', 'id'=>$model->tid)),
	array('label'=>'Manage Atype', 'url'=>array('admin')),
);
?>

<h1>Update Atype <?php echo $model->tid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>