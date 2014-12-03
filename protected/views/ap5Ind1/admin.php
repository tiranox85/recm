<?php
/* @var $this Ap5Ind1Controller */
/* @var $model Ap5Ind1 */

$this->breadcrumbs=array(
	'Ap5 Ind1s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ap5Ind1', 'url'=>array('index')),
	array('label'=>'Create Ap5Ind1', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap5-ind1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ap5 Ind1s</h1>

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
	'id'=>'ap5-ind1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'entidad',
		'valor',
		'rubro',
		'anio',
		'mes',
		/*
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
