<?php
/* @var $this Ap2Ind3Controller */
/* @var $model Ap2Ind3 */

$this->breadcrumbs=array(
	'Ap2 Ind3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap2Ind3', 'url'=>array('index')),
	array('label'=>'Manage Ap2Ind3', 'url'=>array('admin')),
);
?>

<h1>Create Ap2Ind3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>