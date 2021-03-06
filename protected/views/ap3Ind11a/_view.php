<?php
/* @var $this Ap3Ind11aController */
/* @var $data Ap3Ind11a */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro1')); ?>:</b>
	<?php echo CHtml::encode($data->rubro1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pea')); ?>:</b>
	<?php echo CHtml::encode($data->pea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po')); ?>:</b>
	<?php echo CHtml::encode($data->po); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pdes')); ?>:</b>
	<?php echo CHtml::encode($data->pdes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro')); ?>:</b>
	<?php echo CHtml::encode($data->rubro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_reg')); ?>:</b>
	<?php echo CHtml::encode($data->user_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mod')); ?>:</b>
	<?php echo CHtml::encode($data->user_mod); ?>
	<br />

	*/ ?>

</div>