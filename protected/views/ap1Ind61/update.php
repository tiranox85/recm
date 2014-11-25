<?php
/* @var $this Ap1Ind61Controller */
/* @var $model Ap1Ind61 */

$this->breadcrumbs=array(
	'Ap1 Ind61s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap1Ind61', 'url'=>array('index')),
	array('label'=>'Create Ap1Ind61', 'url'=>array('create')),
	array('label'=>'View Ap1Ind61', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap1Ind61', 'url'=>array('admin')),
);
?>

<h1>Update Ap1Ind61 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>