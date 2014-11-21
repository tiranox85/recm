<?php
/* @var $this EntidadesController */
/* @var $model Entidades */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entidades', 'url'=>array('index')),
	array('label'=>'Create Entidades', 'url'=>array('create')),
	array('label'=>'View Entidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Entidades', 'url'=>array('admin')),
);
?>

<h1>Update Entidades <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>