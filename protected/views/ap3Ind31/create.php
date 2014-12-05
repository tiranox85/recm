<?php
/* @var $this Ap3Ind31Controller */
/* @var $model Ap3Ind31 */

$this->breadcrumbs=array(
	'Ap3 Ind31s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap3Ind31', 'url'=>array('index')),
	array('label'=>'Manage Ap3Ind31', 'url'=>array('admin')),
);
?>

<h1>Create Ap3Ind31</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>