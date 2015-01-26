<?php
$baseUrl = Yii::app()->request->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<img usemap="#planetmap" src="<?php echo $baseUrl;?>/img/janbaz/hello.jpg" alt="" border="0">
<map name="planetmap">
	<area title="خاطرات" shape="rect" coords="125,37,310,193" href=""  alt="خاطرات">
   
   
   
    <area title="نگارخانه" shape="rect" coords="594,304,752,458" href="<?php echo $baseUrl;?>/index.php/site/page?view=pictures" alt="نگارخانه">
</map>



