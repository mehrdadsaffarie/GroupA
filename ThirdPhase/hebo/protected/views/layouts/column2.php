<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php
	$baseUrl = Yii::app()->request->baseUrl;
?>
<section class="main-body">
  <div class="container">
  <div class="row-fluid">
	
    <div class="span12">

		<?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>CHtml::link('Dashboard'),
                'htmlOptions'=>array('class'=>'breadcrumb')
            )); ?><!-- breadcrumbs -->
        <?php endif?>
        
        <!-- Include content pages -->
        <?php echo $content; ?>

	</div><!--/span-->
    

</div>
</section>


<?php $this->endContent(); ?>