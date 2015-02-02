<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products Models',
);

$this->menu=array(
	array('label'=>'Create ProductsModel', 'url'=>array('create')),
	array('label'=>'Manage ProductsModel', 'url'=>array('admin')),
);
?>

<h1>Products Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
