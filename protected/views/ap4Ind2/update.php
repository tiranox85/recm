<?php
/* @var $this Ap4Ind2Controller */
/* @var $model Ap4Ind2 */

$this->breadcrumbs=array(
	'Ap4 Ind2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap4Ind2', 'url'=>array('index')),
	array('label'=>'Create Ap4Ind2', 'url'=>array('create')),
	array('label'=>'View Ap4Ind2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap4Ind2', 'url'=>array('admin')),
);
?>

<h1>Update Ap4Ind2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>