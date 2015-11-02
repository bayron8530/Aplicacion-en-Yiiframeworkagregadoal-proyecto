<?php
/* @var $this GarantiasController */
/* @var $model Garantias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Serial'); ?>
		<?php echo $form->textField($model,'Serial',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Parte_Mala'); ?>
		<?php echo $form->textField($model,'Parte_Mala',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Registro'); ?>
		<?php echo $form->textField($model,'Fecha_Registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Fin'); ?>
		<?php echo $form->textField($model,'Fecha_Fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Observaciones'); ?>
		<?php echo $form->textField($model,'Observaciones',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->