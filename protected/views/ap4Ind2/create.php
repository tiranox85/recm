<?php
/* @var $this Ap4Ind2Controller */
/* @var $model Ap4Ind2 */

$this->breadcrumbs=array(
	'Ap4 Ind2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind2', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind2', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>