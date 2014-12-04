<?php
/* @var $this Ap4Ind12Controller */
/* @var $model Ap4Ind12 */

$this->breadcrumbs=array(
	'Ap4 Ind12s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind12', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind12', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind12</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>