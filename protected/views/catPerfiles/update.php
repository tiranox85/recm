<?php
/* @var $this CatPerfilesController */
/* @var $model CatPerfiles */

$this->breadcrumbs=array(
	'Cat Perfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatPerfiles', 'url'=>array('index')),
	array('label'=>'Create CatPerfiles', 'url'=>array('create')),
	array('label'=>'View CatPerfiles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CatPerfiles', 'url'=>array('admin')),
);
?>

<h1>Update CatPerfiles <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>