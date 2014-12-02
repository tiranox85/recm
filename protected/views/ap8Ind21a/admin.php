<?php
/* @var $this Ap8Ind21aController */
/* @var $model Ap8Ind21a */

$this->breadcrumbs=array(
	'Ap8 Ind21as'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ap8Ind21a', 'url'=>array('index')),
	array('label'=>'Create Ap8Ind21a', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ap8-ind21a-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ap8 Ind21as</h1>

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
	'id'=>'ap8-ind21a-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'anio',
		'rubro',
		'valor',
		'fecha_reg',
		'fecha_mod',
		/*
		'user_reg',
		'user_mod',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
