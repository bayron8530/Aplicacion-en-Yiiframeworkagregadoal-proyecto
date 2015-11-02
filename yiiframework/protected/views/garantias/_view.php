<?php
/* @var $this GarantiasController */
/* @var $data Garantias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marca')); ?>:</b>
	<?php echo CHtml::encode($data->Marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Modelo')); ?>:</b>
	<?php echo CHtml::encode($data->Modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Serial')); ?>:</b>
	<?php echo CHtml::encode($data->Serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parte_Mala')); ?>:</b>
	<?php echo CHtml::encode($data->Parte_Mala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Registro')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Registro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Fin')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->Observaciones); ?>
	<br />

	*/ ?>

</div>