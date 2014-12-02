<?php
/* @var $this Ap9Ind1Controller */
/* @var $model Ap9Ind1 */

$this->breadcrumbs=array(
	'Ap9 Ind1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap9Ind1', 'url'=>array('index')),
	array('label'=>'Create Ap9Ind1', 'url'=>array('create')),
	array('label'=>'View Ap9Ind1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap9Ind1', 'url'=>array('admin')),
);
?>

<h1>Update Ap9Ind1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>