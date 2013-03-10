<?php
/* @var $this AtypeController */
/* @var $model Atype */

$this->breadcrumbs=array(
	'Atypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Atype', 'url'=>array('index')),
	array('label'=>'Manage Atype', 'url'=>array('admin')),
);
?>

<h1>Create Atype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>