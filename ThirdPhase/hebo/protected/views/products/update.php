<?php
/* @var $this ProductsController */
/* @var $model ProductsModel */

$this->breadcrumbs=array(
	'Products Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductsModel', 'url'=>array('index')),
	array('label'=>'Create ProductsModel', 'url'=>array('create')),
	array('label'=>'View ProductsModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductsModel', 'url'=>array('admin')),
);
?>

<h1>Update ProductsModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>