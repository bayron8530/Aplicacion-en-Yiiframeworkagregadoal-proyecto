<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Gastos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('strings', 'List Gasto'), 'url'=>array('index')),
	array('label'=>Yii::t('strings', 'Create Gasto'), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gasto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo Yii::t('strings', '<h1>Manage Gastos</h1>')?>

<p>
Puedes buscar utilizando como filtro en los campos numericos los simbolos (Menor: <b>&lt;</b>, Menor o Igual:<b>&lt;=</b>, Mayor: <b>&gt;</b>, Mayor o Igual:<b>&gt;=</b>, O:<b>&lt;&gt;</b>
or <b>=</b>) Ejemplo: en el campo Id escribo >2. Solo muestra los registros que tienen los Id mayores que 2, puedes usar este filtrado en mas de un campo numerico a la ves.
</p>

<?php echo CHtml::link(Yii::t('strings', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gasto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idGasto',
		'monto',
		'etiqueta',
		'fecha',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
