<?php
/* @var $this Ap3Ind11Controller */
/* @var $model Ap3Ind11 */

$this->breadcrumbs=array(
	'Ap3 Ind11s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap3Ind11', 'url'=>array('index')),
	array('label'=>'Manage Ap3Ind11', 'url'=>array('admin')),
);
?>

<h1>Create Ap3Ind11</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>