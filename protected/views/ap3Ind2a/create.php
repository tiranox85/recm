<?php
/* @var $this Ap3Ind2aController */
/* @var $model Ap3Ind2a */

$this->breadcrumbs=array(
	'Ap3 Ind2as'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap3Ind2a', 'url'=>array('index')),
	array('label'=>'Manage Ap3Ind2a', 'url'=>array('admin')),
);
?>

<h1>Create Ap3Ind2a</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>