<?php
/* @var $this Ap3Ind4Controller */
/* @var $model Ap3Ind4 */

$this->breadcrumbs=array(
	'Ap3 Ind4s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap3Ind4', 'url'=>array('index')),
	array('label'=>'Manage Ap3Ind4', 'url'=>array('admin')),
);
?>

<h1>Create Ap3Ind4</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>