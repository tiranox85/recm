<?php
/* @var $this Ap3Ind11aController */
/* @var $model Ap3Ind11a */

$this->breadcrumbs=array(
	'Ap3 Ind11as'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap3Ind11a', 'url'=>array('index')),
	array('label'=>'Create Ap3Ind11a', 'url'=>array('create')),
	array('label'=>'View Ap3Ind11a', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap3Ind11a', 'url'=>array('admin')),
);
?>

<h1>Update Ap3Ind11a <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>