<?php
/* @var $this Ap1Ind61Controller */
/* @var $model Ap1Ind61 */

$this->breadcrumbs=array(
	'Ap1 Ind61s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap1Ind61', 'url'=>array('index')),
	array('label'=>'Manage Ap1Ind61', 'url'=>array('admin')),
);
?>

<h1>Create Ap1Ind61</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>