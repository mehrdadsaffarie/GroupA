<?php
/* @var $this ProductsController */
/* @var $model ProductsModel */

$this->breadcrumbs=array(
	'Products Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductsModel', 'url'=>array('index')),
	array('label'=>'Create ProductsModel', 'url'=>array('create')),
	array('label'=>'Update ProductsModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductsModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductsModel', 'url'=>array('admin')),
);
?>

<h1>View ProductsModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		'fathername',
		'nation_code',
		'sh_code',
		'mobile',
		'tel',
		'city',
		'adr',
	),
)); ?>
