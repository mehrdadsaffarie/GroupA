<?php
$baseUrl = Yii::app()->request->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery');
?>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>

<script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
            effect: 'boxRandom',
            manualAdvance : false,
            controlNav: false
        });
    });
</script>
<!--    http://shohada.tct.ir  source  -->

<div class="slider-bootstrap" align="center"  ><!-- start slider -->
    <div class="slider-wrapper theme-default" align="center">
        <div id="slider-nivo" style="width: 300px" class="nivoSlider">
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/1.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/1.jpg" alt="" title=" 	سيد محمود آثاري " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/2.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/2.jpg" alt="" title="مصطفي احساني " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/3.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/3.jpg" alt="" title=" 	احمد آخوندي" />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/4.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/4.jpg" alt="" title="علي اسحاقي " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/5.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/5.jpg" alt="" title="سيد علي اعتصامي " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/6.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/6.jpg" alt="" title=" 	مجيد اعتمادي چهارده " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/7.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/7.jpg" alt="" title="محمدرضا اعرابيان " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/8.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/8.jpg" alt="" title="مالک افريشم " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/9.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/9.jpg" alt="" title="محمد اکبري ارمکي " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/10.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/10.jpg" alt="" title="محمداسماعيل آل اسحاق " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/11.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/11.jpg" alt="" title="نصراله بختياري " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/12.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/12.jpg" alt="" title=" 	مسعود بخششي " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/13.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/13.jpg" alt="" title="منوچهر پرخيده " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/14.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/14.jpg" alt="" title=" 	عظيم ثابت قدم " />
            <img src="<?php echo $baseUrl;?>/img/bashohada/negar/15.jpg" data-thumb="<?php echo $baseUrl;?>/img/bashohada/negar/15.jpg" alt="" title="پروانه ابراهيم زاده قره تپه " />
        </div>
    </div>
</div><!-- /slider -->