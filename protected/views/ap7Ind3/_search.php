<?php
/* @var $this Ap7Ind3Controller */
/* @var $model Ap7Ind3 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldo1'); ?>
		<?php echo $form->textField($model,'saldo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colocacion1'); ?>
		<?php echo $form->textField($model,'colocacion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amortizacion1'); ?>
		<?php echo $form->textField($model,'amortizacion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colocacion2'); ?>
		<?php echo $form->textField($model,'colocacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amortizacion2'); ?>
		<?php echo $form->textField($model,'amortizacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actualizacion2'); ?>
		<?php echo $form->textField($model,'actualizacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saldo2'); ?>
		<?php echo $form->textField($model,'saldo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endeudamiento'); ?>
		<?php echo $form->textField($model,'endeudamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_reg'); ?>
		<?php echo $form->textField($model,'user_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_mod'); ?>
		<?php echo $form->textField($model,'user_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->