<?php
/* @var $this Ap3Ind2Controller */
/* @var $model Ap3Ind2 */
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
		<?php echo $form->label($model,'delegacion'); ?>
		<?php echo $form->textField($model,'delegacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trimestre'); ?>
		<?php echo $form->textField($model,'trimestre'); ?>
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