<?php
/* @var $this Ap8Ind11Controller */
/* @var $model Ap8Ind11 */

$this->breadcrumbs=array(
	'Ap8 Ind11s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ap8Ind11', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind11', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap8-ind11-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ap8 Ind11s</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ap8-ind11-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'anio',
		'mes',
		'p_ocupadas_n_ma',
		'p_ocupadas_df_ma',
		'p_ocupadas_n_me',
		/*
		'p_ocupadas_df_me',
		'remuneraciones_n_ma',
		'remuneraciones_df_ma',
		'remuneraciones_me',
		'remuneraciones_df_me',
		'remuneraciones_pp_n_ma',
		'remuneraciones_pp_df_ma',
		'remuneraciones_pp_n_me',
		'remuneraciones_pp_df_me',
		'ingreso_n_ma',
		'ingreso_df_ma',
		'ingreso_n_me',
		'ingreso_df_me',
		'compras_n_ma',
		'compras_df_ma',
		'compras_n_me',
		'compras_df_me',
		'fecha_reg',
		'fecha_mod',
		'user_reg',
		'user_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
