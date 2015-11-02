<?php
/* @var $this GastoController */
/* @var $data Gasto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGasto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGasto), array('view', 'id'=>$data->idGasto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etiqueta')); ?>:</b>
	<?php echo CHtml::encode($data->etiqueta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>