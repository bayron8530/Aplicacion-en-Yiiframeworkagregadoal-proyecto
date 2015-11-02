<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Gastos'=>array('index'),
	$model->idGasto,
	Yii::t('strings', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('strings', 'List Gasto'), 'url'=>array('index')),
	array('label'=>Yii::t('strings', 'Create Gasto'), 'url'=>array('create')),
	array('label'=>Yii::t('strings', 'View Gasto'), 'url'=>array('view', 'id'=>$model->idGasto)),
	array('label'=>Yii::t('strings', 'Manage Gastos'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', 'Update Gasto')?> <?php echo $model->idGasto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>