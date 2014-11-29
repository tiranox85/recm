<?php
/* @var $this Ap4Ind4Controller */
/* @var $model Ap4Ind4 */

$this->breadcrumbs=array(
	'Ap4 Ind4s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap4Ind4', 'url'=>array('index')),
	array('label'=>'Create Ap4Ind4', 'url'=>array('create')),
	array('label'=>'View Ap4Ind4', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap4Ind4', 'url'=>array('admin')),
);
?>

<h1>Update Ap4Ind4 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>