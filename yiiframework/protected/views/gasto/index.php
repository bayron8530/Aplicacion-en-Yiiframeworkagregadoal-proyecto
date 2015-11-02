<?php
/* @var $this GastoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gastos',
);

$this->menu=array(
	array('label'=>Yii::t('strings', 'Create Gasto'), 'url'=>array('create')),
	array('label'=>Yii::t('strings', 'Manage Gastos'), 'url'=>array('admin')),
);
?>


<h1>Gastos Registrados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
