<?php
/* @var $this GarantiasController */
/* @var $model Garantias */

$this->breadcrumbs=array(
	'Garantiases'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Garantias', 'url'=>array('index')),
	array('label'=>'Create Garantias', 'url'=>array('create')),
	array('label'=>'Update Garantias', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Garantias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Garantias', 'url'=>array('admin')),
);
?>

<h1>View Garantias #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Tipo',
		'Marca',
		'Modelo',
		'Serial',
		'Parte_Mala',
		'Fecha_Registro',
		'Fecha_Fin',
		'Observaciones',
	),
)); ?>
