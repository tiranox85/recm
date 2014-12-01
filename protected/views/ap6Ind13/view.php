<?php
/* @var $this Ap6Ind13Controller */
/* @var $model Ap6Ind13 */

$this->breadcrumbs=array(
	'Ap6 Ind13s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ap6Ind13', 'url'=>array('index')),
	array('label'=>'Create Ap6Ind13', 'url'=>array('create')),
	array('label'=>'Update Ap6Ind13', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ap6Ind13', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ap6Ind13', 'url'=>array('admin')),
);
?>

<h1>View Ap6Ind13 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rubro',
		'valor',
		'mes',
		'anio',
		'fecha_reg',
		'fecha_mod',
		'user_reg',
		'user_mod',
	),
)); ?>
