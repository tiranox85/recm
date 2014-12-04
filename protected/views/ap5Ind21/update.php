<?php
/* @var $this Ap5Ind21Controller */
/* @var $model Ap5Ind21 */

$this->breadcrumbs=array(
	'Ap5 Ind21s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap5Ind21', 'url'=>array('index')),
	array('label'=>'Create Ap5Ind21', 'url'=>array('create')),
	array('label'=>'View Ap5Ind21', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap5Ind21', 'url'=>array('admin')),
);
?>

<h1>Update Ap5Ind21 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>