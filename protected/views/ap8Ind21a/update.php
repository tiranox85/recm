<?php
/* @var $this Ap8Ind21aController */
/* @var $model Ap8Ind21a */

$this->breadcrumbs=array(
	'Ap8 Ind21as'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap8Ind21a', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind21a', 'url'=>array('create')),
	array('label'=>'View Ap8Ind21a', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap8Ind21a', 'url'=>array('admin')),
);
?>

<h1>Update Ap8Ind21a <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>