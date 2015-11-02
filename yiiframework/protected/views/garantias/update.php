<?php
/* @var $this GarantiasController */
/* @var $model Garantias */

$this->breadcrumbs=array(
	'Garantiases'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Garantias', 'url'=>array('index')),
	array('label'=>'Create Garantias', 'url'=>array('create')),
	array('label'=>'View Garantias', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Garantias', 'url'=>array('admin')),
);
?>

<h1>Update Garantias <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>