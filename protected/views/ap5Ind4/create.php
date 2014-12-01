<?php
/* @var $this Ap5Ind4Controller */
/* @var $model Ap5Ind4 */

$this->breadcrumbs=array(
	'Ap5 Ind4s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap5Ind4', 'url'=>array('index')),
	array('label'=>'Manage Ap5Ind4', 'url'=>array('admin')),
);
?>

<h1>Create Ap5Ind4</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>