<?php
/* @var $this Ap7Ind3Controller */
/* @var $model Ap7Ind3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap7-ind3-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro'); ?>
		<?php echo $form->error($model,'rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo1'); ?>
		<?php echo $form->textField($model,'saldo1'); ?>
		<?php echo $form->error($model,'saldo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colocacion1'); ?>
		<?php echo $form->textField($model,'colocacion1'); ?>
		<?php echo $form->error($model,'colocacion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amortizacion1'); ?>
		<?php echo $form->textField($model,'amortizacion1'); ?>
		<?php echo $form->error($model,'amortizacion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colocacion2'); ?>
		<?php echo $form->textField($model,'colocacion2'); ?>
		<?php echo $form->error($model,'colocacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amortizacion2'); ?>
		<?php echo $form->textField($model,'amortizacion2'); ?>
		<?php echo $form->error($model,'amortizacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actualizacion2'); ?>
		<?php echo $form->textField($model,'actualizacion2'); ?>
		<?php echo $form->error($model,'actualizacion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo2'); ?>
		<?php echo $form->textField($model,'saldo2'); ?>
		<?php echo $form->error($model,'saldo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endeudamiento'); ?>
		<?php echo $form->textField($model,'endeudamiento'); ?>
		<?php echo $form->error($model,'endeudamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_reg'); ?>
		<?php echo $form->textField($model,'fecha_reg'); ?>
		<?php echo $form->error($model,'fecha_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_mod'); ?>
		<?php echo $form->textField($model,'fecha_mod'); ?>
		<?php echo $form->error($model,'fecha_mod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_reg'); ?>
		<?php echo $form->textField($model,'user_reg'); ?>
		<?php echo $form->error($model,'user_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_mod'); ?>
		<?php echo $form->textField($model,'user_mod'); ?>
		<?php echo $form->error($model,'user_mod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->