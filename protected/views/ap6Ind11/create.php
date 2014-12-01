<?php
/* @var $this Ap6Ind11Controller */
/* @var $model Ap6Ind11 */

$this->breadcrumbs=array(
	'Ap6 Ind11s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap6Ind11', 'url'=>array('index')),
	array('label'=>'Manage Ap6Ind11', 'url'=>array('admin')),
);
?>

<h1>Create Ap6Ind11</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>