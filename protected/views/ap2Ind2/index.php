<?php
/* @var $this Ap2Ind2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ap2 Ind2s',
);

$this->menu=array(
	array('label'=>'Create Ap2Ind2', 'url'=>array('create')),
	array('label'=>'Manage Ap2Ind2', 'url'=>array('admin')),
);
?>

<h1>Ap2 Ind2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
