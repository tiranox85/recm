<?php
/* @var $this Ap5Ind21Controller */
/* @var $model Ap5Ind21 */

$this->breadcrumbs=array(
	'Ap5 Ind21s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap5Ind21', 'url'=>array('index')),
	array('label'=>'Manage Ap5Ind21', 'url'=>array('admin')),
);
?>

<h1>Create Ap5Ind21</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>