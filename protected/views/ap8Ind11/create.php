<?php
/* @var $this Ap8Ind11Controller */
/* @var $model Ap8Ind11 */

$this->breadcrumbs=array(
	'Ap8 Ind11s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap8Ind11', 'url'=>array('index')),
	array('label'=>'Manage Ap8Ind11', 'url'=>array('admin')),
);
?>

<h1>Create Ap8Ind11</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>