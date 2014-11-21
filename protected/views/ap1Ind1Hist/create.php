<?php
/* @var $this Ap1ind1HistJorgeController */
/* @var $model Ap1ind1HistJorge */

$this->menu=array(
	//array('label'=>'List Ap1ind1HistJorge', 'url'=>array('index')),
	array('label'=>'Administrar Periodos', 'url'=>array('index')),
);
?>

<h3>Agregar Periodos</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>