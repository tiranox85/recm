<?php
/* @var $this Ap8Ind11Controller */
/* @var $model Ap8Ind11 */

$this->breadcrumbs=array(
	'Ap8 Ind11s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap8Ind11', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind11', 'url'=>array('create')),
	array('label'=>'View Ap8Ind11', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap8Ind11', 'url'=>array('admin')),
);
?>

<h1>Update Ap8Ind11 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>