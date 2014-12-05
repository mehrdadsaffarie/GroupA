<!-- Require the header -->
<!-- tpl_header.php -->
<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" href="<?php echo $baseUrl;?>/img/ico/favicon.ico">
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
                            array('label'=>'Home 1 ', 'url'=>array('/site/index')),
							array('label'=>'Home 2 ', 'url'=>array('/site/page', 'view'=>'home2')),
							array('label'=>'Home 3 ', 'url'=>array('/site/page', 'view'=>'home3')),
							array('label'=>'Home 4 ', 'url'=>array('/site/page', 'view'=>'home4')),
							array('label'=>'Home 5 ', 'url'=>array('/site/page', 'view'=>'home5')),
							array('label'=>'Home 6 ', 'url'=>array('/site/page', 'view'=>'home6')),
                        )),
						array('label'=>'سبک ها <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"6 styles"),
                        'items'=>array(
                            array('label'=>'<span class="style" style="background-color:#0088CC;"></span> Style 1', 'url'=>"javascript:chooseStyle('none', 60)"),
							array('label'=>'<span class="style" style="background-color:#e42e5d;"></span> Style 2', 'url'=>"javascript:chooseStyle('style2', 60)"),
							array('label'=>'<span class="style" style="background-color:#c80681;"></span> Style 3', 'url'=>"javascript:chooseStyle('style3', 60)"),
							array('label'=>'<span class="style" style="background-color:#51a351;"></span> Style 4', 'url'=>"javascript:chooseStyle('style4', 60)"),
							array('label'=>'<span class="style" style="background-color:#b88006;"></span> Style 5', 'url'=>"javascript:chooseStyle('style5', 60)"),
							array('label'=>'<span class="style" style="background-color:#f9630f;"></span> Style 6', 'url'=>"javascript:chooseStyle('style6', 60)"),
                        )),
						
						array('label'=>'ویژگی ها <span class="caret"></span>', 'url'=>array('/site/page', 'view'=>'columns'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"cool features"),
                        'items'=>array(
                            array('label'=>'Columns', 'url'=>array('/site/page', 'view'=>'columns')),
							array('label'=>'Pricing tables', 'url'=>array('/site/page', 'view'=>'pricing-tables')),
							array('label'=>'UI Elements', 'url'=>array('/site/page', 'view'=>'elements')),
                        )),

                        array('label'=>'درباره', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("data-description"=>"what we are about"),),
                        array('label'=>'Portfolio <span class="caret"></span>', 'url'=>array('/site/page', 'view'=>'portfolio-4-cols'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"some of our work"), 
                        'items'=>array(
                            array('label'=>'4 columns', 'url'=>array('/site/page', 'view'=>'portfolio-4-cols')),
							array('label'=>'3 columns', 'url'=>array('/site/page', 'view'=>'portfolio-3-cols')),
							array('label'=>'2 columns', 'url'=>array('/site/page', 'view'=>'portfolio-2-cols')),
							array('label'=>'1 column', 'url'=>array('/site/page', 'view'=>'portfolio-1-col')),
                        )),
						array('label'=>'بلاگ <span class="caret"></span>', 'url'=>array('/site/page', 'view'=>'blog'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"our blog"),
                        'items'=>array(
                            array('label'=>'Blog - Large image', 'url'=>array('/site/page', 'view'=>'blog')),
							array('label'=>'Blog - Small image', 'url'=>array('/site/page', 'view'=>'blog-small-picture')),
							array('label'=>'Blog - Item', 'url'=>array('/site/page', 'view'=>'blog-item')),
                        )),
                        array('label'=>'ارتباط با ما', 'url'=>array('/site/page', 'view'=>'contact'),'linkOptions'=>array("data-description"=>"get hold of us"),),
                        array('label'=>'ثبت نام', 'url'=>array('/site/page', 'view'=>'register'),'linkOptions'=>array("data-description"=>"راحت و سریع"),),
                        array('label'=>'ورود', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"مخصوص اعضا")),
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
            <div  ><a href="http://www.leader.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/leader.jpg"    class="link" border="0" alt="پايگاه اطلاع رساني دفتر مقام معظم رهبري" title="پايگاه اطلاع رساني دفتر مقام معظم رهبري"></a>            </div>
            <div  ><a href="http://www.dolat.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/dolat.jpg"  class="link" border="0" alt="پایگاه اطلاع رسانی دولت" title="پایگاه اطلاع رسانی دولت"></a></div>
            <div  ><a href="http://www.president.ir" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/president.jpg"   class="link" border="0" alt="پایگاه اطلاع رسانی ریاست جمهوری" title="پایگاه اطلاع رسانی ریاست جمهوری"></a></div>
            <div  ><a href="http://www.isaar.ir/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/isar1.jpg"  class="link" border="0" alt="پبنیاد شهید و امور ایثارگران" title="بنیاد شهید و امور ایثار گران"></a></div>
            <div  ><a href="http://www.navideshahed.com/fa/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/shahed.jpg"  class="link" border="0" alt = "پایگاه اطلاع رسانی فرهنگ ایثار و شهادت"title="پایگاه اطلاع رسانی فرهنگ ایثار و شهادت"</a></div>
            <div  ><a href="http://www.navideisar.ir/" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/navid.jpg"  class="link" border="0" alt = "نوید ایثار"title="نوید ایثار"</a></div>
            <div  ><a href="http://www.chemical-victims.com" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/selah.jpg"  class="link" border="0" alt = "قربانیان سلاح های شیمیایی"title="قربانیان سلاح های شیمیایی"</a></div>
            <div  ><a href="http://www.teror-victims.com/fa" target="_blank"><img src="<?php echo $baseUrl;?>/img/Kenar/teror.jpg"  class="link" border="0" alt = "قربانیان ترور"title="قربانیان ترور"</a></div>

        </div>


</div>




<!-- Include content pages -->


<!-- Require the footer -->
<!-- tpl_footer.php -->

<section id="bottom" class="" style="direction: rtl">
    <div class="container bottom" style="direction: rtl">
    	<div class="row-fluid ">
            <div class="span3" style="direction: rtl">
            	<h5>About us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                
            </div><!-- /span3-->
            
            <div class="span3">
            	<h5>Blog roll</h5>
            	<ul class="list-blog-roll">
                    <li>
                    	<a href="#" title="Example blog article">Understanding CSS</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">40 Free icons</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">Search engine optimisation</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">Intermarket guide pt. 1</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">Intermarket guide pt. 2</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">Intermarket guide pt. 3</a>	
                    </li>
                    <li>
                    	<a href="#" title="Example blog article">CSS3 IE hacks</a>	
                    </li>
                </ul>
            	
            </div><!-- /span3-->
            
            <div class="span3">
            	<h5>Twitter feed</h5>
            	<p>
                    Cool CSS tutorial
                    <br/>
                    <a href="#">http://t.co/Xdert</a>
                    <br/>
                    <span>about 1 hour ago</span>
                </p>
                <p>
                    Everything to know about HTML5
                    <br/>
                    <a href="#">http://t.co/Xdert</a>
                    <br/>
                    <span>about 7 hours ago</span>
                </p>
                <p>
                    Learn PHP in 3 days
                    <br/>
                    <a href="#">http://t.co/Xdert</a>
                    <br/>
                    <span>about 9 hours ago</span>
                </p>
            </div><!-- /span3-->
            
            <div class="span3">
            	<h5>Contact us</h5>
                <p>
                    795 Folsom Ave, Suite 600<br/>
                    Address<br/>
                    P: (123) 456-7890<br/>
                    E: mail@mail.com<br/>
                
                </p>
                <br>
                <h5>Follow us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Themeforest</a></li>
                
                </ul>
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