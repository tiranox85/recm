<?php
/* @var $this Ap7Ind3Controller */
/* @var $model Ap7Ind3 */

$this->breadcrumbs=array(
	'Ap7 Ind3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap7Ind3', 'url'=>array('index')),
	array('label'=>'Manage Ap7Ind3', 'url'=>array('admin')),
);
?>

<h1>Create Ap7Ind3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>