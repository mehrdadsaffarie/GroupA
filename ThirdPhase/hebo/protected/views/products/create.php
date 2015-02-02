<?php
/* @var $this ProductsController */
/* @var $model ProductsModel */

$this->breadcrumbs=array(
	'Products Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductsModel', 'url'=>array('index')),
	array('label'=>'Manage ProductsModel', 'url'=>array('admin')),
);
?>

<h1>Create ProductsModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>