<?php
/* @var $this Ap4Ind11Controller */
/* @var $model Ap4Ind11 */

$this->breadcrumbs=array(
	'Ap4 Ind11s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ap4Ind11', 'url'=>array('index')),
	array('label'=>'Manage Ap4Ind11', 'url'=>array('admin')),
);
?>

<h1>Create Ap4Ind11</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>