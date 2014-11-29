<?php
/* @var $this Ap4Ind4Controller */
/* @var $model Ap4Ind4 */

$this->breadcrumbs=array(
	'Ap4 Ind4s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind4', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind4', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind4</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>