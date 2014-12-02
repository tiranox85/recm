<?php
/* @var $this Ap8Ind11Controller */
/* @var $model Ap8Ind11 */
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
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_ocupadas_n_ma'); ?>
		<?php echo $form->textField($model,'p_ocupadas_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_ocupadas_df_ma'); ?>
		<?php echo $form->textField($model,'p_ocupadas_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_ocupadas_n_me'); ?>
		<?php echo $form->textField($model,'p_ocupadas_n_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_ocupadas_df_me'); ?>
		<?php echo $form->textField($model,'p_ocupadas_df_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_n_ma'); ?>
		<?php echo $form->textField($model,'remuneraciones_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_df_ma'); ?>
		<?php echo $form->textField($model,'remuneraciones_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_me'); ?>
		<?php echo $form->textField($model,'remuneraciones_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_df_me'); ?>
		<?php echo $form->textField($model,'remuneraciones_df_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_pp_n_ma'); ?>
		<?php echo $form->textField($model,'remuneraciones_pp_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_pp_df_ma'); ?>
		<?php echo $form->textField($model,'remuneraciones_pp_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_pp_n_me'); ?>
		<?php echo $form->textField($model,'remuneraciones_pp_n_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneraciones_pp_df_me'); ?>
		<?php echo $form->textField($model,'remuneraciones_pp_df_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingreso_n_ma'); ?>
		<?php echo $form->textField($model,'ingreso_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingreso_df_ma'); ?>
		<?php echo $form->textField($model,'ingreso_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingreso_n_me'); ?>
		<?php echo $form->textField($model,'ingreso_n_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingreso_df_me'); ?>
		<?php echo $form->textField($model,'ingreso_df_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_n_ma'); ?>
		<?php echo $form->textField($model,'compras_n_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_df_ma'); ?>
		<?php echo $form->textField($model,'compras_df_ma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_n_me'); ?>
		<?php echo $form->textField($model,'compras_n_me'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras_df_me'); ?>
		<?php echo $form->textField($model,'compras_df_me'); ?>
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