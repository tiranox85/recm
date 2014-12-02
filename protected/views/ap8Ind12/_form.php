<?php
/* @var $this Ap8Ind12Controller */
/* @var $model Ap8Ind12 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap8-ind12-form',
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
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compras_n_ma'); ?>
		<?php echo $form->textField($model,'compras_n_ma'); ?>
		<?php echo $form->error($model,'compras_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compras_df_ma'); ?>
		<?php echo $form->textField($model,'compras_df_ma'); ?>
		<?php echo $form->error($model,'compras_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compras_n_me'); ?>
		<?php echo $form->textField($model,'compras_n_me'); ?>
		<?php echo $form->error($model,'compras_n_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compras_df_me'); ?>
		<?php echo $form->textField($model,'compras_df_me'); ?>
		<?php echo $form->error($model,'compras_df_me'); ?>
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