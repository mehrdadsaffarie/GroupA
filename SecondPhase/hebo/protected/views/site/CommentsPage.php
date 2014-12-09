<?php
/* @var $this CommentsController */
/* @var $model Comments */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - CommentsPage';
$this->breadcrumbs=array(
	'CommentsPage', );
?>
?>



<?php if(Yii::app()->user->hasFlash('commentsPage')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('commentsPage'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'commentsPage-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Topic'); ?>
		<?php echo $form->textField($model,'Topic'); ?>
		<?php echo $form->error($model,'Topic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textField($model,'Description'); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'writer_email'); ?>
		<?php echo $form->textField($model,'writer_email'); ?>
		<?php echo $form->error($model,'writer_email'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>