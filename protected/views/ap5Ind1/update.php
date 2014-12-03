<?php
/* @var $this Ap5Ind1Controller */
/* @var $model Ap5Ind1 */

$this->breadcrumbs=array(
	'Ap5 Ind1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap5Ind1', 'url'=>array('index')),
	array('label'=>'Create Ap5Ind1', 'url'=>array('create')),
	array('label'=>'View Ap5Ind1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap5Ind1', 'url'=>array('admin')),
);
?>

<h1>Update Ap5Ind1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>