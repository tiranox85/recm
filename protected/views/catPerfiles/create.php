<?php
/* @var $this CatPerfilesController */
/* @var $model CatPerfiles */

$this->breadcrumbs=array(
	'Cat Perfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatPerfiles', 'url'=>array('index')),
	array('label'=>'Manage CatPerfiles', 'url'=>array('admin')),
);
?>

<h1>Create CatPerfiles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>