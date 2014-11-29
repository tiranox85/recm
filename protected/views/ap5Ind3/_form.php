<?php
/* @var $this Ap5Ind3Controller */
/* @var $model Ap5Ind3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap5-ind3-form',
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
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad'); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facilidad'); ?>
		<?php echo $form->textField($model,'facilidad'); ?>
		<?php echo $form->error($model,'facilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apertura'); ?>
		<?php echo $form->textField($model,'apertura'); ?>
		<?php echo $form->error($model,'apertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manejo'); ?>
		<?php echo $form->textField($model,'manejo'); ?>
		<?php echo $form->error($model,'manejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro'); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cumplimiento'); ?>
		<?php echo $form->textField($model,'cumplimiento'); ?>
		<?php echo $form->error($model,'cumplimiento'); ?>
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