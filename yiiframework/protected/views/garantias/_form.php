<?php
/* @var $this GarantiasController */
/* @var $model Garantias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'garantias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo'); ?>
		<?php echo $form->textField($model,'Tipo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marca'); ?>
		<?php echo $form->textField($model,'Marca',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Modelo'); ?>
		<?php echo $form->textField($model,'Modelo',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Serial'); ?>
		<?php echo $form->textField($model,'Serial',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Parte_Mala'); ?>
		<?php echo $form->textField($model,'Parte_Mala',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Parte_Mala'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Registro'); ?>
		<?php echo $form->textField($model,'Fecha_Registro'); ?>
		<?php echo $form->error($model,'Fecha_Registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Fin'); ?>
		<?php echo $form->textField($model,'Fecha_Fin'); ?>
		<?php echo $form->error($model,'Fecha_Fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Observaciones'); ?>
		<?php echo $form->textField($model,'Observaciones',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Observaciones'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->