<?php
/* @var $this Ap1Ind61Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ap1 Ind61s',
);

$this->menu=array(
	array('label'=>'Create Ap1Ind61', 'url'=>array('create')),
	array('label'=>'Manage Ap1Ind61', 'url'=>array('admin')),
);
?>

<h1>Ap1 Ind61s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
