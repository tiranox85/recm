<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuarios', 'url'=>array('create')),
	array('label'=>'Mostrar Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h3>Actualizar Usuario</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>