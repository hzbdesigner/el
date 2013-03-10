<?php
/* @var $this PtypeController */
/* @var $model Ptype */

$this->breadcrumbs=array(
	'Ptypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ptype', 'url'=>array('index')),
	array('label'=>'Manage Ptype', 'url'=>array('admin')),
);
?>

<h1>Create Ptype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>