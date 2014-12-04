<?php
/* @var $this Ap4Ind11Controller */
/* @var $model Ap4Ind11 */

$this->breadcrumbs=array(
	'Ap4 Ind11s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap4Ind11', 'url'=>array('index')),
	array('label'=>'Create Ap4Ind11', 'url'=>array('create')),
	array('label'=>'View Ap4Ind11', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap4Ind11', 'url'=>array('admin')),
);
?>

<h1>Update Ap4Ind11 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>