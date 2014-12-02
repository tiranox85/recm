<?php
/* @var $this Ap8Ind12Controller */
/* @var $model Ap8Ind12 */

$this->breadcrumbs=array(
	'Ap8 Ind12s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap8Ind12', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind12', 'url'=>array('create')),
	array('label'=>'View Ap8Ind12', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap8Ind12', 'url'=>array('admin')),
);
?>

<h1>Update Ap8Ind12 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>