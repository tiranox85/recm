<?php
/* @var $this Ap1Ind9Controller */
/* @var $model Ap1Ind9 */

$this->breadcrumbs=array(
	'Ap1 Ind9s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind9', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind9', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind9</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>