<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Agregar Usuarios', 'url'=>array('create')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h31>Usuarios</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
