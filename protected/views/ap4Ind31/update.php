<?php
/* @var $this Ap4Ind31Controller */
/* @var $model Ap4Ind31 */

$this->breadcrumbs=array(
	'Ap4 Ind31s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap4Ind31', 'url'=>array('index')),
	array('label'=>'Create Ap4Ind31', 'url'=>array('create')),
	array('label'=>'View Ap4Ind31', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap4Ind31', 'url'=>array('admin')),
);
?>

<h1>Update Ap4Ind31 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>