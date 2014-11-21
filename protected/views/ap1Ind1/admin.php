<?php
/* @var $this Ap1Ind1Controller */
/* @var $model Ap1Ind1 */



$this->menu=array(
//	array('label'=>'List Ap1Ind1', 'url'=>array('index')),
	array('label'=>'Regresar', 'url'=>array('ap1Ind1Hist/index')),
	array('label'=>'Agregar registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap1-ind1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Administrar Datos de este periodo</h3>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ap1-ind1-grid',
	'dataProvider'=>$model->search($id),
	'filter'=>$model,
	'columns'=>array(
	//	'id',
		//'id_periodo',
		array(
            'name'=>'id_periodo',
            'value'=>'$data->Periodos->periodo',
            'filter'=>Ap1Ind1Hist::model()->options,
            'htmlOptions'=>array('style'=>'width: 80px;  text-align:center;'),
                    ),
		array(
            'name'=>'entidad',
            'value'=>'$data->Entidades->nombre',
            'filter'=>Entidades::model()->options,
            'htmlOptions'=>array('style'=>'width: 80px;  text-align:center;'),
                    ),
		//'entidad',
			array(
            'name'=>'municipio',
            'value'=>'$data->Delegaciones->nombre',
            'filter'=>Delegaciones::model()->options,
            'htmlOptions'=>array('style'=>'width: 60px;  text-align:center;'),
                    ),
		//'actividad',
		array(
            'name'=>'actividad',
            'value'=>'$data->Actividad->nombre',
            'filter'=>ActividadesEconomicas::model()->options,
            'htmlOptions'=>array('style'=>'width: 120px;  text-align:center;'),
                    ),
		array(
            'name'=>'valor',
          //  'value'=>'$data->Actividad->nombre',
           // 'filter'=>ActividadesEconomicas::model()->options,
            'htmlOptions'=>array('style'=>'width: 20px;  text-align:center;'),
                    ),
		/*
		'usuario',
		'fecha_reg',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
