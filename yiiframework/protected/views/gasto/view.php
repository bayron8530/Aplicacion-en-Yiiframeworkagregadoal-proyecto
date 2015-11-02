<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Gastos'=>array('index'),
	$model->idGasto,
);

$this->menu=array(
	array('label'=>Yii::t('strings', 'List Gasto'), 'url'=>array('index')),
	array('label'=>Yii::t('strings', 'Create Gasto'), 'url'=>array('create')),
	array('label'=>Yii::t('strings','Update Gasto'), 'url'=>array('update', 'id'=>$model->idGasto)),
	array('label'=>Yii::t('strings','Delete Gasto'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idGasto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('strings','Manage Gastos'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', 'View Gasto')?> <?php echo $model->idGasto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idGasto',
		'monto',
		'etiqueta',
		'fecha',
		'descripcion',
	),
)); ?>
