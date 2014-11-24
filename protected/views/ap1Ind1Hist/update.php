<?php
/* @var $this Ap1ind1JorgeController */
/* @var $model Ap1ind1Jorge */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
	"Periodo $model->id"=>array('view','id'=>$model->id),
	'Configuracion',
);

?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>