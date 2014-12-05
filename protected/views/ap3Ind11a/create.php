<?php
/* @var $this Ap3Ind11aController */
/* @var $model Ap3Ind11a */

$this->breadcrumbs=array(
	'Ap3 Ind11as'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap3Ind11a', 'url'=>array('index')),
	array('label'=>'Manage Ap3Ind11a', 'url'=>array('admin')),
);
?>

<h1>Create Ap3Ind11a</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>