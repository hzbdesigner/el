<?php
/* @var $this AtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atypes',
);

$this->menu=array(
	array('label'=>'Create Atype', 'url'=>array('create')),
	array('label'=>'Manage Atype', 'url'=>array('admin')),
);
?>

<h1>Atypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
