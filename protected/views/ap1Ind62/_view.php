<?php
/* @var $this Ap1Ind62Controller */
/* @var $data Ap1Ind62 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo_id')); ?>:</b>
	<?php echo CHtml::encode($data->periodo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rubro')); ?>:</b>
	<?php echo CHtml::encode($data->rubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_reg')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_mod')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_mod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_reg')); ?>:</b>
	<?php echo CHtml::encode($data->user_reg); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mod')); ?>:</b>
	<?php echo CHtml::encode($data->user_mod); ?>
	<br />

	*/ ?>

</div>