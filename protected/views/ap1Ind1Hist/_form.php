<?php
/* @var $this Ap1ind1HistJorgeController */
/* @var $model Ap1ind1HistJorge */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ap1ind1-hist-jorge-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo'); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'config'); ?>
		<?php echo $form->textField($model,'config'); ?>
		<?php echo $form->error($model,'config'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_archivo'); ?>
		<?php echo $form->fileField($model,'_archivo'); ?>
		<?php echo $form->error($model,'_archivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->