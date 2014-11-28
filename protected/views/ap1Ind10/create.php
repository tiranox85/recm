<?php
/* @var $this Ap1Ind10Controller */
/* @var $model Ap1Ind10 */

$this->breadcrumbs=array(
	'Ap1 Ind10s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind10', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind10', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind10</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>