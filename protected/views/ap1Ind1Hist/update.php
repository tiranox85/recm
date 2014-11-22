<?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Administrar Periodos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ap1ind1Jorge', 'url'=>array('index')),
	array('label'=>'Create Ap1ind1Jorge', 'url'=>array('create')),
	array('label'=>'View Ap1ind1Jorge', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ap1ind1Jorge', 'url'=>array('admin')),
);
?>

<h1>Update Ap1ind1Jorge <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>