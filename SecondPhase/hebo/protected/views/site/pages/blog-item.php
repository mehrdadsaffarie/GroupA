<?php
		$baseUrl = Yii::app()->request->baseUrl;
?>
        <div class="page-header">
            <h1>Blog <small> our experiences</small></h1>
        </div>
        <div class="row-fluid">
            <div class="span9">
            <div class="blog-item-container">
            
            <div class="blog-image">
            <img src="<?php echo $baseUrl;?>/img/slider/flickr/s4.jpg" alt="Blog example image" />
            </div><!-- blog-image -->
            
            <div class="blog-title">
            <h2>Finding the best theme for you</h2>
            </div><!-- blog-title -->
            
            <div class="blog-details">
                <ul>
                  <li><i class="icon-calendar"></i> 23 October 2012</li>
                  <li><i class="icon-comment"></i> <a href="#comments" title="Comments">4 replies</a></li>
                  <li><a href="#"><i class="icon-user"></i> Simpson Moyo</a></li>
                  <li><a href="#"><i class="icon-th-list"></i> Backend Design</a></li>
                </ul>
            </div><!-- blog-details -->
            
            <div class="blog-tags">
            <i class="icon-tags"></i> PHP, CSS, java, free, web design, themeforest, styling, bootstrap, jQuery
            </div><!-- blog-tags -->
            
            <div class="blog-text">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
               </p>
               
               <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. 
                </p>
                
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum.</p>
                </blockquote>
                
                <p>Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
               </p>
               
               <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum. Vivamus nec sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
               </p>
               
            </div><!-- blog-text -->
            
            <hr />
            
            </div><!-- blog-item-container -->
              <div class="blog-comments-container">
                <h3>Comments (4)</h3>
                
                <div class="row-fluid comment">
                    <div class="span12 ">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64">
                      </a>
                      
                        <strong class="media-heading">Thomas K.</strong>
                        <br />
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      </div><!-- span12 -->
                      </div><!-- row-fluid -->
                      
                      <div class="row-fluid comment">
                      <div class="span11 offset1 ">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64">
                      </a>
                      
                        <strong class="media-heading">Slyder</strong>
                        <br />
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      </div><!-- span11 -->
                      
                        </div><!-- row-fluid -->
                        
                        <div class="row-fluid comment">
                      <div class="span11 offset1 ">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64">
                      </a>
                      
                        <strong class="media-heading">Jean</strong>
                        <br />
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      </div><!-- span11 -->
                      
                        </div><!-- row-fluid -->
                        
                        <div class="row-fluid comment">
                      <div class="span12 ">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64">
                      </a>
                      
                        <strong class="media-heading">Tom</strong>
                        <br />
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      </div><!-- span12 -->
                      
                        </div><!-- row-fluid -->
                        
                        <h3>Leave a Comment</h3>
                        
                        <div class="row-fluid">
                        <form>
                            <label>Name</label>
                            <input class="input-xlarge" type="text" placeholder="Enter your name">
                            <label>Email</label>
                            <input class="input-xlarge" type="text" placeholder="Enter your email">
                            <label>Message</label>
                            <textarea rows="10" class="input-xxlarge"></textarea>
                            <br />
                            <button type="button" class="btn">Post comment</button>
                         </form>
                        </div><!-- row-fluid -->
        
                    
                </div><!-- blog-comments-container-->
            </div><!-- span9 -->
            
            <div class="span3">

           		<!-- tpl-side-bar.php -->
				<?php //include_once('tpl-side-bar.php');?>
				<!-- tpl-side-bar.php --> 
            	<div class="">
  					<input class="input-block-level" id="appendedInput" placeholder="Search..." type="text">
				</div>
				<h3>Categories</h3>
				
				<ul class="nav nav-list">
  					<li class="active"><a href="#">Tutorials</a></li>
					<li><a href="#">Competitions</a></li>
					<li><a href="#">Freebies</a></li>
  					<li><a href="#">Tips &amp; Tricks</a></li>
  					<li><a href="#">Photo Library</a></li>
				</ul>

				<h3>Tags</h3>

				<div class="tags">
    				<a href="#">CSS</a>
    
   					<a href="#">Java Script</a>
    				<a href="#">jQuery</a>
				    <a href="#">HTML5</a>
				    <a href="#">WordPress</a>
				    <a href="#">Responsive</a>
				    <a href="#">Themeforest</a> 
					<a href="#">Blog</a>
				    <a href="#">Fluid</a>
				    <a href="#">PHP</a>
				    <a href="#">Slider</a>
				    <a href="#">Bootstrap</a>
    
				</div>

				<h3>Popular &amp; recent</h3>

				<ul class="nav nav-tabs" id="side-bar-tabs">
				  <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
				  <li><a href="#recent" data-toggle="tab">Recent</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane active" id="popular">
					<ul class="list-popular-content  clearfix">
				        <li>
					        <img src="<?php echo $baseUrl;?>/img/blog/small1.jpg" width="65" height="65" alt="Small blog image" class="pull-left" />
					        <h5><a href="#" title="Example blog article">How to buy this theme</a></h5>
					        <div>this is a summary of the content...</div>
				        </li>
				        <li>
					        <img src="<?php echo $baseUrl;?>/img/blog/small2.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
					        <h5><a href="#" title="Example blog article">Guide to CSS3</a></h5>
					        <div>this is a summary of the content...</div>
				        </li>
				        <li>
					        <img src="<?php echo $baseUrl;?>/img/blog/small3.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
					        <h5><a href="#" title="Example blog article">Moved to a new building</a></h5>
					        <div>this is a summary of the content...</div>
				        </li>
				        <li>
					        <img src="<?php echo $baseUrl;?>/img/blog/small4.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
					        <h5><a href="#" title="Example blog article">Choose the right theme</a></h5>
						    <div>this is a summary of the content...</div>
        				</li>
        				<li>
        					<img src="<?php echo $baseUrl;?>/img/blog/small5.jpg" width="65" height="65" alt="Small blog image" class="pull-left" />
        					<h5><a href="#" title="Example blog article">Why use bootstrap</a></h5>
        					<div>this is a summary of the content...</div>
        				</li>
					</ul>
  				</div>
  				<div class="tab-pane" id="recent">
  				<ul class="list-recent-content">
    			    <li>
    				    <img src="<?php echo $baseUrl;?>/img/blog/small5.jpg" width="65" height="65" alt="Small blog image" class="pull-left" />
     				   <h5><a href="#" title="Example blog article">Why use bootstrap</a></h5>
     				   <div>this is a summary of the content...</div>
     			   </li>
     			   <li>
     				   <img src="<?php echo $baseUrl;?>/img/blog/small1.jpg" width="65" height="65" alt="Small blog image" class="pull-left" />
  	  				   <h5><a href="#" title="Example blog article">How to buy this theme</a></h5>
  					   <div>this is a summary of the content...</div>
  			      </li>
        		  <li>
        				<img src="<?php echo $baseUrl;?>/img/blog/small3.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
        				<h5><a href="#" title="Example blog article">Moved to a new building</a></h5>
        				<div>this is a summary of the content...</div>
        	      </li>
        		  <li>
        				<img src="<?php echo $baseUrl;?>/img/blog/small4.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
        				<h5><a href="#" title="Example blog article">Choose the right theme</a></h5>
        				<div>this is a summary of the content...</div>
        		  </li>
        		  <li>
        				<img src="<?php echo $baseUrl;?>/img/blog/small2.jpg" width="65" height="65" alt="Small blog image" class="pull-left"/>
        				<h5><a href="#" title="Example blog article">Guide to CSS3</a></h5>
        				<div>this is a summary of the content...</div>
        		  </li>
				</ul>
		  </div>
		</div>
            	<!-- /tpl-side-bar.php --> 
            </div><!-- span3 -->
        </div><!-- /row-fluid -->
    