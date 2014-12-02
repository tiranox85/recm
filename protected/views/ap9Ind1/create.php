<?php
/* @var $this Ap9Ind1Controller */
/* @var $model Ap9Ind1 */

$this->breadcrumbs=array(
	'Ap9 Ind1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap9Ind1', 'url'=>array('index')),
	array('label'=>'Manage Ap9Ind1', 'url'=>array('admin')),
);
?>

<h1>Create Ap9Ind1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>