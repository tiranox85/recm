<?php
/* @var $this Ap4Ind12aController */
/* @var $model Ap4Ind12a */

$this->breadcrumbs=array(
	'Ap4 Ind12as'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap4Ind12a', 'url'=>array('index')),
	array('label'=>'Create Ap4Ind12a', 'url'=>array('create')),
	array('label'=>'View Ap4Ind12a', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap4Ind12a', 'url'=>array('admin')),
);
?>

<h1>Update Ap4Ind12a <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>