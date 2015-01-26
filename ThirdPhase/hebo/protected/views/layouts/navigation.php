<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
     
      <!-- NOTE: Do not remove this. It is the navigation dropdown for mobile devices. It only shows on small screens-->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a><!--/.btn-navbar -->

      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="<?php if(($page == '')||($page == 'homepage2')||($page == 'homepage3')||($page == 'homepage4')||($page == 'homepage5')||($page == 'homepage6')) echo 'active';?>  dropdown">
              <a href="index.php" data-description="our home page" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php">Home 1 - Nivoslider</a></li>
                <li><a href="index.php?page=homepage2">Home 2 - Bootstrap carousal</a></li>
                <li><a href="index.php?page=homepage3">Home 3 - Piecemaker2</a></li>
                <li><a href="index.php?page=homepage4">Home 4 - Static image</a></li>
                <li><a href="index.php?page=homepage5">Home 5 - Video header</a></li>
                <li><a href="index.php?page=homepage6">Home 6 without slider</a></li>
              </ul><!--/.dropdown-menu -->
          </li><!--/.dropdown -->
          <li class="dropdown ">
              <a href="#" data-description="6 styles" class="dropdown-toggle" data-toggle="dropdown">Styles <b class="caret"></b></a>
              <ul class="dropdown-menu style-switcher">
                <li><a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span> Style 1</a></li>
                <li><a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#e42e5d;"></span> Style 2</a></li>
                <li><a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#c80681;"></span> Style 3</a></li>
                <li><a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#51a351;"></span> Style 4</a></li>
                <li><a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#b88006;"></span> Style 5</a></li>
                <li><a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#f9630f;"></span> Style 6</a></li>
              </ul><!--/.dropdown-menu -->
          </li><!--/.dropdown -->
          <li class=" <?php if(($page == 'columns')||($page == 'pricing-tables2')||($page == 'elements')) echo 'active';?> dropdown">
              <a href="index.php?page=columns" data-description="cool features" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?page=columns">Columns</a></li>
                <li><a href="index.php?page=pricing-tables2">Pricing tables</a></li>
                <li><a href="index.php?page=elements">UI elements</a></li>
              </ul><!--/.dropdown-menu -->
          </li><!--/.dropdown -->
          
          <li <?php if($page == 'about') echo 'class="active"';?>><a href="index.php?page=about" data-description="what we are about">About</a></li>
          <li class="<?php if(($page == 'portfolio')||($page == 'portfolio-3-cols')||($page == 'portfolio-2-cols')||($page == 'portfolio-1-col')) echo 'active';?>  dropdown">
          <a href="index.php?page=portfolio" data-description="some of our work" class="dropdown-toggle" data-toggle="dropdown" >Portfolio  <b class="caret"></b></a>
          	<ul class="dropdown-menu">
                <li><a href="index.php?page=portfolio">4 Columns</a></li>
                <li><a href="index.php?page=portfolio-3-cols">3 Columns</a></li>
                <li><a href="index.php?page=portfolio-2-cols">2 Columns</a></li>
                <li><a href="index.php?page=portfolio-1-col">1 Column</a></li>
              </ul><!--/.dropdown-menu -->
          </li>
          <li <?php if($page == 'pricing-tables') echo 'class="active"';?>><a href="index.php?page=pricing-tables" data-description="our services">Services</a></li>
          <li class="<?php if(($page == 'blog')||($page == 'blog-small-picture')||($page == 'blog-item')) echo 'active';?> dropdown">
          <a href="index.php?page=blog" data-description="blog examples" class="dropdown-toggle" data-toggle="dropdown">Blog  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?page=blog">Blog large image</a></li>
                <li><a href="index.php?page=blog-small-picture">Blog small images</a></li>
                <li><a href="index.php?page=blog-item">Blog single item</a></li>
              </ul><!--/.dropdown-menu -->
          </li><!--/.dropdown -->
          
          <li <?php if($page == 'contact') echo 'class="active"';?>><a href="index.php?page=contact" data-description="get hold of us">Contact</a></li>
        </ul><!--/.nav -->
      </div><!--/.nav-collapse -->
    </div><!--/ .container -->
  </div><!--/.nav-inner -->
</div><!--/.navbar-inverse -->