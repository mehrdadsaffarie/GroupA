<!-- Require the header -->
<!-- tpl_header.php -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>بنیاد شهید و امور ایثارگران - خوش آمدید</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">	
    <!--<meta name="author" content="Simpson Moyo - Webapplicationthemes.com">-->

	<?php
		$baseUrl = Yii::app()->request->baseUrl;
		Yii::app()->clientScript->registerCoreScript('jquery');
	?>


	<!-- the styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap-responsive.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pontano+Sans'>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/nivo-slider.css" >

    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/lightbox/css/lightbox.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/template.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style1.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo $baseUrl;?>/css/style2.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo $baseUrl;?>/css/style3.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo $baseUrl;?>/css/style4.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo $baseUrl;?>/css/style5.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo $baseUrl;?>/css/style6.css" />

    
	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/swfobject/swfobject.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/lightbox/js/lightbox.js"></script>
    <!-- style switcher -->
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/styleswitcher.js"></script>
    
    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo $baseUrl;?>/img/ico/iran.ico">
</head>

<body>
<style>
    body{
        direction: rtl;
        text-align:right;
    }
</style>
<section id="header">
<!-- Include the header bar -->
    <?php include_once('header.php');?>
<!-- /.container -->  
</section><!-- /#header -->

<!-- Require the navigation -->
<!-- tpl_navigation.php-->
<section id="navigation-main">
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<!-- NOTE: Do not remove this. It is the navigation dropdown for mobile devices. It only shows on small screens-->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a><!--/.btn-navbar -->

      
        <div class="nav-collapse">

			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'خانه <span class="caret"></span>', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"صفحه اصلی"),
                        'items'=>array(
                            array('label'=>'صفحه اصلی ', 'url'=>array('/site/index')),
							array('label'=>'با شهدا', 'url'=>array('/site/page', 'view'=>'bashohada.bashohada')),
							array('label'=>'عملیات ها ', 'url'=>array('/site/page', 'view'=>'amaliat')),
							array('label'=>'Home 4 ', 'url'=>array('/site/page', 'view'=>'home4')),
							array('label'=>'Home 5 ', 'url'=>array('/site/page', 'view'=>'home5')),
							array('label'=>'Home 6 ', 'url'=>array('/site/page', 'view'=>'home6')),
                        )),
						array('label'=>'سبک ها <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"سبک"),
                        'items'=>array(
                            array('label'=>'<span class="style" style="background-color:#0088CC;"></span> سبک 1', 'url'=>"javascript:chooseStyle('none', 60)"),
							array('label'=>'<span class="style" style="background-color:#e42e5d;"></span> سبک 2', 'url'=>"javascript:chooseStyle('style2', 60)"),
							array('label'=>'<span class="style" style="background-color:#c80681;"></span> سبک 3', 'url'=>"javascript:chooseStyle('style3', 60)"),
							array('label'=>'<span class="style" style="background-color:#51a351;"></span> سبک 4', 'url'=>"javascript:chooseStyle('style4', 60)"),
							array('label'=>'<span class="style" style="background-color:#b88006;"></span> سبک 5', 'url'=>"javascript:chooseStyle('style5', 60)"),
							array('label'=>'<span class="style" style="background-color:#f9630f;"></span> سبک 6', 'url'=>"javascript:chooseStyle('style6', 60)"),
                        )),
						


                        array('label'=>'کاربرگ ها', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"کاربرگ های نمایه سازی"),),

                        array('label'=>'اخبار', 'url'=>array('/post'),'linkOptions'=>array("data-description"=>"اخبار سایت"),),
                        array('label'=>'ارتباط با ما', 'url'=>array('/site/page', 'view'=>'contact'),'linkOptions'=>array("data-description"=>"درباره ما"),),
                        array('label'=>'ثبت نام', 'url'=>array('/site/page', 'view'=>'register'),'linkOptions'=>array("data-description"=>"راحت و سریع"),),
                        array('label'=>'ورود', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"مخصوص اعضا")),
                        array('label'=>' پست ها <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"پست"),
                            'items'=>array(
                                array('label'=>'ارسال پست', 'url'=>array('/post/create')),
                                array('label'=>'مدیریت پست ها', 'url'=>array('/post/admin')),
                                array('label'=>'تایید نظرات', 'url'=>array('/comment/index')),
                            )),
                        array('label'=>'خروج ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"خارج شدن اعضا")),
                    ),
                )); 
			?>

    	</div>
    </div>
	</div>
</div>
</section>
<!-- /#navigation-main -->

<div class="container-fluid">
    <div class="span11">
        <?php echo $content; ?>
    </div>
        <div class="span2">
            <div  ><a href="http://www.leader.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/leader.jpg"    class="link" border="0" alt="پايگاه اطلاع رساني دفتر مقام معظم رهبري" title="پايگاه اطلاع رساني دفتر مقام معظم رهبري"></a>            </div></br>
            <div  ><a href="http://www.dolat.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/dolat.jpg"  class="link" border="0" alt="پایگاه اطلاع رسانی دولت" title="پایگاه اطلاع رسانی دولت"></a></div></br>
            <div  ><a href="http://www.president.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/president.jpg"   class="link" border="0" alt="پایگاه اطلاع رسانی ریاست جمهوری" title="پایگاه اطلاع رسانی ریاست جمهوری"></a></div></br>
            <div  ><a href="http://www.isaar.ir/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/isar1.jpg"  class="link" border="0" alt="پبنیاد شهید و امور ایثارگران" title="بنیاد شهید و امور ایثار گران"></a></div></br>
            <div  ><a href="http://www.navideshahed.com/fa/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/shahed.jpg"  class="link" border="0" alt = "پایگاه اطلاع رسانی فرهنگ ایثار و شهادت"title="پایگاه اطلاع رسانی فرهنگ ایثار و شهادت"</a></div></br>
            <div  ><a href="http://www.navideisar.ir/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/navid.jpg"  class="link" border="0" alt = "نوید ایثار"title="نوید ایثار"</a></div></br>
            <div  ><a href="http://www.chemical-victims.com" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/selah.jpg"  class="link" border="0" alt = "قربانیان سلاح های شیمیایی"title="قربانیان سلاح های شیمیایی"</a></div></br>
            <div  ><a href="http://www.teror-victims.com/fa" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/teror.jpg"  class="link" border="0" alt = "قربانیان ترور"title="قربانیان ترور"</a></div>
            <div><a href=""></a></div>

        </div>


</div>




<!-- Include content pages -->


<!-- Require the footer -->
<!-- tpl_footer.php -->

<section id="bottom" class="" style="direction: rtl">
    <div class="container bottom" style="direction: rtl">
    	<div class="row-fluid ">
            <div class="span3" style="direction: rtl">

            </div><!-- /span3-->

            <div class="span3">


            </div><!-- /span3-->
            
            <div class="span3">

            </div><!-- /span3-->


            <div class="span3">
            	<h5>اعضای گروه به ترتیب الفبا</h5>

                سید محمد حسین حسینی<a href="mailto:mhoseinhoseini@gmail.com" target="_top">Send Mail</a>
                </p>
                علی شفیعی<a href="mailto:m.ali.shafiee@gmail.com" target="_top">Send Mail</a>
                </p>
                مهرداد صفاریه<a href="mailto:mehrdads.1371@gmail.com" target="_top">Send Mail</a>
                </p>
                جواد فروق<a href="mailto:javadforough@gmail.com" target="_top">Send Mail</a>
                </p>
                محمد میرموسوی<a href="mailto:mohammadmirmoosavi@gmail.com" target="_top">Send Mail</a>
                </p>
            </div><!-- /span3-->
        </div><!-- /row-fluid -->
        </div><!-- /container-->
</section><!-- /bottom-->

<footer>
    <div class="footer">
        <div class="container">
            تمامی حقوق این سایت محفوظ و متعلق به بنیاد شهید و امور ایثارگران می باشد.
        </div>
	</div>
</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo $baseUrl;?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-button.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $baseUrl;?>/js/bootstrap-typeahead.js"></script>   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>


  </body>
</html>	