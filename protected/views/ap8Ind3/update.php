<?php
/* @var $this Ap8Ind3Controller */
/* @var $model Ap8Ind3 */

$this->breadcrumbs=array(
	'Ap8 Ind3s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap8Ind3', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind3', 'url'=>array('create')),
	array('label'=>'View Ap8Ind3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap8Ind3', 'url'=>array('admin')),
);
?>

<h1>Update Ap8Ind3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>