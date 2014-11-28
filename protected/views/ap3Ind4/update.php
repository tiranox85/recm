<?php
/* @var $this Ap3Ind4Controller */
/* @var $model Ap3Ind4 */

$this->breadcrumbs=array(
	'Ap3 Ind4s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap3Ind4', 'url'=>array('index')),
	array('label'=>'Create Ap3Ind4', 'url'=>array('create')),
	array('label'=>'View Ap3Ind4', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap3Ind4', 'url'=>array('admin')),
);
?>

<h1>Update Ap3Ind4 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>