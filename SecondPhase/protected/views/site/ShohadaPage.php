<?php
/* @var $this ShohadaController */
/* @var $model Shohada */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shohada-ShohadaPage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Firstname'); ?>
		<?php echo $form->textField($model,'Firstname'); ?>
		<?php echo $form->error($model,'Firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lastname'); ?>
		<?php echo $form->textField($model,'Lastname'); ?>
		<?php echo $form->error($model,'Lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operation_id'); ?>
		<?php echo $form->textField($model,'operation_id'); ?>
		<?php echo $form->error($model,'operation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place'); ?>
		<?php echo $form->error($model,'birth_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education'); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_name'); ?>
		<?php echo $form->textField($model,'father_name'); ?>
		<?php echo $form->error($model,'father_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Wittness_date'); ?>
		<?php echo $form->textField($model,'Wittness_date'); ?>
		<?php echo $form->error($model,'Wittness_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Marital_status'); ?>
		<?php echo $form->textField($model,'Marital_status'); ?>
		<?php echo $form->error($model,'Marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Job'); ?>
		<?php echo $form->textField($model,'Job'); ?>
		<?php echo $form->error($model,'Job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wittness_place'); ?>
		<?php echo $form->textField($model,'wittness_place'); ?>
		<?php echo $form->error($model,'wittness_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'signup_type'); ?>
		<?php echo $form->textField($model,'signup_type'); ?>
		<?php echo $form->error($model,'signup_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Memories'); ?>
		<?php echo $form->textField($model,'Memories'); ?>
		<?php echo $form->error($model,'Memories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description'); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->