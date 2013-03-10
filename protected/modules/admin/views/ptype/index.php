<?php
/* @var $this PtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ptypes',
);

$this->menu=array(
	array('label'=>'Create Ptype', 'url'=>array('create')),
	array('label'=>'Manage Ptype', 'url'=>array('admin')),
);
?>

<h1>Ptypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
