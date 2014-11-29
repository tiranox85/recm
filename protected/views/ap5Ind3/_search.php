<?php
/* @var $this Ap5Ind3Controller */
/* @var $model Ap5Ind3 */
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
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facilidad'); ?>
		<?php echo $form->textField($model,'facilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apertura'); ?>
		<?php echo $form->textField($model,'apertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manejo'); ?>
		<?php echo $form->textField($model,'manejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registro'); ?>
		<?php echo $form->textField($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cumplimiento'); ?>
		<?php echo $form->textField($model,'cumplimiento'); ?>
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