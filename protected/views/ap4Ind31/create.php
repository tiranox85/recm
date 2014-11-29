<?php
/* @var $this Ap4Ind31Controller */
/* @var $model Ap4Ind31 */

$this->breadcrumbs=array(
	'Ap4 Ind31s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind31', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind31', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind31</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>