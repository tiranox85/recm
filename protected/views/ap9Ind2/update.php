<?php
/* @var $this Ap9Ind2Controller */
/* @var $model Ap9Ind2 */

$this->breadcrumbs=array(
	'Ap9 Ind2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap9Ind2', 'url'=>array('index')),
	array('label'=>'Create Ap9Ind2', 'url'=>array('create')),
	array('label'=>'View Ap9Ind2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap9Ind2', 'url'=>array('admin')),
);
?>

<h1>Update Ap9Ind2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>