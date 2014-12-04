<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<?php /**CB-5.1**/ ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/bootstrap.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/screen.css" media="screen, projection" />
	<?php /**CB-6.1**/ ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/form.css" media="screen, projection" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<?php /**CB-6.2**/ ?>
		<div id="login">
		    <?php 
			if (Yii::app()->user->isGuest) {
				$userMenu=array(
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest)
					);
			} else {
			    $userMenu=array(
				array('label'=>'Welcome '.Yii::app()->user->firstname),
				array('label'=>'My Albums', 'url'=>'/album/admin'),
				array('label'=>'Settings', 'url'=>array('/user/update','id'=>Yii::app()->user->id)),
				array('label'=>'Logout ('.Yii::app()->user->firstname.')', 'url'=>array('/site/logout'))
				);
			}
			$this->widget('zii.widgets.CMenu',array(
			    'items'=>$userMenu,
			    'htmlOptions'=>array('class'=>'userMenu')
			));
			?>
		    
		</div>
		  <?php ?>
		 
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/album/index')), /**CB-6.2**/
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		?>
		
	</div><!-- mainmenu -->
	
	<div class="search">
	    <?php
		echo CHtml::form('/album/search', 'GET');
		    echo CHtml::submitButton('go',array('class'=>'btn btn-small btn-success right small'));
		    echo CHtml::textField('tag','',array('class'=>'right small'));
		echo CHtml::endForm();
		?>
	</div>
	<div class="clear"></div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

<script src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
