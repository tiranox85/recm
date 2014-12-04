<?php
/* @var $this Ap4Ind12aController */
/* @var $model Ap4Ind12a */

$this->breadcrumbs=array(
	'Ap4 Ind12as'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind12a', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind12a', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind12a</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>