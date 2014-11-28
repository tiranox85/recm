<?php
/* @var $this Ap2Ind2Controller */
/* @var $model Ap2Ind2 */

$this->breadcrumbs=array(
	'Ap2 Ind2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap2Ind2', 'url'=>array('index')),
	array('label'=>'Create Ap2Ind2', 'url'=>array('create')),
	array('label'=>'View Ap2Ind2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap2Ind2', 'url'=>array('admin')),
);
?>

<h1>Update Ap2Ind2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>