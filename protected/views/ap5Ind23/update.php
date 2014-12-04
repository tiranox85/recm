<?php
/* @var $this Ap5Ind23Controller */
/* @var $model Ap5Ind23 */

$this->breadcrumbs=array(
	'Ap5 Ind23s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap5Ind23', 'url'=>array('index')),
	array('label'=>'Create Ap5Ind23', 'url'=>array('create')),
	array('label'=>'View Ap5Ind23', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap5Ind23', 'url'=>array('admin')),
);
?>

<h1>Update Ap5Ind23 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>