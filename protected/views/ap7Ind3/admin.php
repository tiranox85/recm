<?php
/* @var $this Ap7Ind3Controller */
/* @var $model Ap7Ind3 */

$this->breadcrumbs=array(
	'Ap7 Ind3s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ap7Ind3', 'url'=>array('index')),
	array('label'=>'Create Ap7Ind3', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap7-ind3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ap7 Ind3s</h1>

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
	'id'=>'ap7-ind3-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'rubro',
		'saldo1',
		'colocacion1',
		'amortizacion1',
		'colocacion2',
		/*
		'amortizacion2',
		'actualizacion2',
		'saldo2',
		'endeudamiento',
		'anio',
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
