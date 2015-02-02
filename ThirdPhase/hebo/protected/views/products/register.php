<?php
/* @var $this ProductsModelController */
/* @var $model ProductsModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-model-register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">قسمت های <span class="required">* دار</span> الزامی هستند.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'نام'); ?>
		<?php echo $form->textField($model,'firstname'); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'نام خانوادگی'); ?>
		<?php echo $form->textField($model,'lastname'); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'نام پدر'); ?>
		<?php echo $form->textField($model,'fathername'); ?>
		<?php echo $form->error($model,'fathername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'کد ملی'); ?>
		<?php echo $form->textField($model,'nation_code'); ?>
		<?php echo $form->error($model,'nation_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'شماره شناسنامه'); ?>
		<?php echo $form->textField($model,'sh_code'); ?>
		<?php echo $form->error($model,'sh_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'موبایل'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'تلفن'); ?>
		<?php echo $form->textField($model,'tel'); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'شهر'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'آدرس'); ?>
		<?php echo $form->textField($model,'adr'); ?>
		<?php echo $form->error($model,'adr'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('ثبت نام'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
