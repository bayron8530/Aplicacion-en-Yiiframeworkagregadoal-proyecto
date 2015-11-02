<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Gastos'=>array('index'),
	yii::t('strings', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('strings', 'List Gasto'), 'url'=>array('index')),
	array('label'=>Yii::t('strings', 'Manage Gastos'), 'url'=>array('admin')),
);
?>

<?php
echo Yii::t('strings', '<h1>record spending</h1>')
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>