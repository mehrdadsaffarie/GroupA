<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>فرم ورود</h1>

<p>لطفا اطلاعات ورود خود را کامل کنید.</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">قسمت های<span class="required">*</span>دار ضروری هستند.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'نام کاربری'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'رمز عبور'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
        <p>
        admin admin
        </p>
	</div>
    <?php echo $form->textField($model,'verifyCode'); ?>
    <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->error($model,'verifyCode'); ?>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'مرا به خاطر بسپار.'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('ورود'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
