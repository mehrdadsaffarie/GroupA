<?php
/* @var $this ProductsController */
/* @var $data ProductsModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fathername')); ?>:</b>
	<?php echo CHtml::encode($data->fathername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nation_code')); ?>:</b>
	<?php echo CHtml::encode($data->nation_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sh_code')); ?>:</b>
	<?php echo CHtml::encode($data->sh_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adr')); ?>:</b>
	<?php echo CHtml::encode($data->adr); ?>
	<br />

	*/ ?>

</div>