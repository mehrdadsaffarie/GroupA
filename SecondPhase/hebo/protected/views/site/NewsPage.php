<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-NewsPage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Topic'); ?>
		<?php echo $form->textField($model,'Topic'); ?>
		<?php echo $form->error($model,'Topic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description'); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Entry_Date'); ?>
		<?php echo $form->textField($model,'Entry_Date'); ?>
		<?php echo $form->error($model,'Entry_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Export_Date'); ?>
		<?php echo $form->textField($model,'Export_Date'); ?>
		<?php echo $form->error($model,'Export_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Main_Text'); ?>
		<?php echo $form->textField($model,'Main_Text'); ?>
		<?php echo $form->error($model,'Main_Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Writer'); ?>
		<?php echo $form->textField($model,'Writer'); ?>
		<?php echo $form->error($model,'Writer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Type'); ?>
		<?php echo $form->textField($model,'Type'); ?>
		<?php echo $form->error($model,'Type'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->