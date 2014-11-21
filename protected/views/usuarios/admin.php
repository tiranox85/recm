<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */



$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuarios', 'url'=>array('create')),
);


?>

<h3>Administrar Usuarios</h3>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'email',
		'perfil',
		'username',
		'password',
		/*
		'session',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
