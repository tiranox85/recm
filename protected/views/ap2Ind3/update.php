<?php
/* @var $this Ap2Ind3Controller */
/* @var $model Ap2Ind3 */

$this->breadcrumbs=array(
	'Ap2 Ind3s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap2Ind3', 'url'=>array('index')),
	array('label'=>'Create Ap2Ind3', 'url'=>array('create')),
	array('label'=>'View Ap2Ind3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap2Ind3', 'url'=>array('admin')),
);
?>

<h1>Update Ap2Ind3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>