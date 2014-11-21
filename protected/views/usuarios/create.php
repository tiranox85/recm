<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Agregar',
);

$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h3>Agregar Usuarios</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>