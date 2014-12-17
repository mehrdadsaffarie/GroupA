<?php
$baseUrl = Yii::app()->request->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<img usemap="#planetmap" src="<?php echo $baseUrl;?>/img/bashohada/shahid.jpg" alt="" border="0">
<map name="planetmap">
    <area title="خاطرات" shape="rect" coords="125,37,310,193" href="<?php echo $baseUrl;?>/index.php/site/page?view=bashohada.khaterat" alt="خاطرات">
    <area title="افلاکیان امروز" shape="rect" coords="125,304,310,458" href="<?php echo $baseUrl;?>/index.php/site/page?view=bashohada.aflak" alt="افلاکیان امروز">
    <area title="وصایای شهدا" shape="rect" coords="594,37,756,193" href="<?php echo $baseUrl;?>/index.php/site/page?view=bashohada.vasaya" alt="وصایای شهدا">
    <area title="نگارخانه" shape="rect" coords="594,304,752,458" href="<?php echo $baseUrl;?>/index.php/site/page?view=bashohada.negar" alt="نگارخانه">
</map>
