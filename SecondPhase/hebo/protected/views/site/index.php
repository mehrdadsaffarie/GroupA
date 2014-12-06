
<?php
		$baseUrl = Yii::app()->request->baseUrl;
	?>


	<div class="slider-bootstrap"><!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                <img src="<?php echo $baseUrl;?>/img/slider/flickr/s10.jpg" data-thumb="<?php echo $baseUrl;?>/img/slider/flickr/s10.jpg" alt="" title="text" />
                <img src="<?php echo $baseUrl;?>/img/slider/flickr/s11.jpg" data-thumb="<?php echo $baseUrl;?>/img/slider/flickr/s11.jpg" alt="" title="" />
                <img src="<?php echo $baseUrl;?>/img/slider/flickr/s12.jpg" data-thumb="<?php echo $baseUrl;?>/img/slider/flickr/s12.jpg" alt="" data-transition="slideInLeft"  />
            </div>
        </div>
    </div> <!-- /slider -->


    <div class="shout-box">
        <div class="shout-text">
          <h1>به سایت بنیاد شهید و امور ایثار گران خوش آمدید.</h1>

        </div>
    </div>
                <hr>

       

      
      <h3 class="header">دسترسی سریع
      	<span class="header-line"></span>  
      </h3>
      <div class="row-fluid center customers">
        <div class="span3 ">
            <a href="http://www.isaar.ir/Aotomation/AutomationAuthenticate.aspx" type="link" target="_blank">سامانه مکاتبات الکترونیک</a>
        </div>
        <div class="span3">
            <a href="http://www.isaar.ir/StaffSalary/SalaryAuthenticate.aspx" type="link" target="_blank">سامانه فیش حقوقی</a>
        </div>
        <div class="span3">
            <a href="http://www.isaar.ir/BonyadNews/SysuSER/login.aspx" type="link" target="_blank">سامانه مطبوعات</a>
        </div>
        <div class="span3">
            <a href="http://www.isaar.ir/WebGenerator/PageView.aspx?src=545&Dynamic=0" type="link" target="_blank">دپارتمان نوآوری</a>
        </div>
          
		</div><!--/row-fluid-->
        
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->