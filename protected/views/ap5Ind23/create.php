<?php
/* @var $this Ap5Ind23Controller */
/* @var $model Ap5Ind23 */

$this->breadcrumbs=array(
	'Ap5 Ind23s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap5Ind23', 'url'=>array('index')),
	array('label'=>'Manage Ap5Ind23', 'url'=>array('admin')),
);
?>

<h1>Create Ap5Ind23</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>