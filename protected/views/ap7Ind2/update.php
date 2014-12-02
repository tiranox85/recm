<?php
/* @var $this Ap7Ind2Controller */
/* @var $model Ap7Ind2 */

$this->breadcrumbs=array(
	'Ap7 Ind2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap7Ind2', 'url'=>array('index')),
	array('label'=>'Create Ap7Ind2', 'url'=>array('create')),
	array('label'=>'View Ap7Ind2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap7Ind2', 'url'=>array('admin')),
);
?>

<h1>Update Ap7Ind2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>